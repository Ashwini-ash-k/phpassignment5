<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function fun1()
    {
        document.getElementById("tb").style.display='block';
    }
    
    </script>
    <style>
    
    </style>
</head>
<body>
    <form action="" method="POST">
    <table border="1" cellspacing="10" cellpadding="10" style="margin-top:150px;background-color:gray">
    <tr><th colspan="2" style="margin-top:150px;background-color:red;font-size:30px;">Passport Details</th></tr>
    <tr><th>Select Passport number</th>
    <td><select name="passno">
    <option disabled selected>---Select---</option>
    <?php
    include "dbcon.php";
    $sql="SELECT `pno` FROM `passport`";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<option value=".$row['pno'].">".$row['pno']."</option>";
        }
    }
    ?>
    </select></td></tr>
    <tr><th colspan="2"><button name="disp" onclick="fun1()" id="btn" value="Display">Display</button></th></tr>
    <?php
    if(isset($_POST["disp"]))
    {
        if(!empty($_POST["passno"]))
        {
            $pno=$_POST["passno"];
            $row=mysqli_query($conn,"SELECT * FROM passport where pno=$pno");
            $result=mysqli_fetch_array($row);
            $fname=$result['fname'];
            $mname=$result['mname'];
            $lname=$result['lname'];
            $dob=$result['dob'];
            $nation=$result['nation'];
            $address=$result['address'];
            $gender=$result['gender'];
            $img=$result['pic'];
        }
    }
    ?>
    </table>
    <table  border=1 class="tb1" id="tb">
    <tr><th>Enter First Name</th><td><input type="text" name="fname" value="<?php if(!empty($_POST["passno"])) echo $fname; else echo ""; ?>"></td></tr>
    <tr><th>Enter Middle Name</th><td><input type="text" name="mname" value="<?php if(!empty($_POST["passno"])) echo $mname; else echo ""; ?>"></td></tr>
    <tr><th>Enter Last Name</th><td><input type="text" name="lname" value="<?php if(!empty($_POST["passno"])) echo $lname; else echo ""; ?>"></td></tr>
    <tr><th>Enter DOB</th><td><input type="text" name="DOB" value="<?php if(!empty($_POST["passno"])) echo $dob; else echo ""; ?>"></td></tr>
    <tr><th>Enter Nationality</th><td><input type="text" name="nat" value="<?php if(!empty($_POST["passno"])) echo $nation; else echo ""; ?>"></td></tr>
    <tr><th>Enter Address</th><td><textarea type="text" name="addr" value="<?php if(!empty($_POST["passno"])) echo $address; else echo ""; ?>"></textarea></td></tr>
    <tr><th>Select Gender</th><td><input type="radio" name="gender" value="Male" <?php if(!empty($_POST["passno"])) if($gender=="Male") echo "checked"?>/>Male<input type="radio" name="gender" value="FeMale" <?php if(!empty($_POST["passno"])) if($gender=="FeMale") echo "checked"?>/>FeMale<input type="radio" name="gender" value="Other" <?php if(!empty($_POST["passno"])) if($gender=="Other") echo "checked"?>/>Other</td></tr>
    <tr><th>Upload Picture</th><td><input type="file" name="img"></td></tr>
    <tr><th colspan="2"><input type="submit" name="submit" value="Update"></th></tr>
    <?php
    if(isset($_POST["submit"]))
    {
        include "dbcon.php";
       echo count($_POST);
    $f_name =  $_POST['fname'];
    $m_name = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['DOB'];
    $nation = $_POST['nat'];
    $address = $_POST['addr'];
    $gender =  $_POST['gender'];
    $img = $_POST['img'];
    $sql="UPDATE `passport` SET `mname`=`$m_name` WHERE `passport`.`pno`=101";
    echo $f_name;
    $result=mysqli_query($conn,$sql);
    echo var_dump($result);
    $aff=mysqli_affected_rows($conn);
    echo "<br>No. of affected rows:$aff";
    if($result)
    {
        echo "<br>We updated the record successfully";
    }
    else
    {
        echo "We could not able to update the record";
    }
}
    ?>
    </table>
    <a href="crud.php" id="btn1">Go to Home Click here...</a>
    
    </form>
    
</body>
</html>
