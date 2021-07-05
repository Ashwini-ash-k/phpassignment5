<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST" style="margin-top:150px;">
    <table border="1" cellspacing="10" cellpadding="10" style="margin-top:150px;background-color:gray">
    <tr><th colspan="2" style="margin-top:150px;background-color:red;font-size:30px;">Passport Details</th></tr>
    <tr><th>Enter Passport number</th><td><input type="text" name="pno" placeholder="Enter passport Number"></td></tr>
    <tr><th>Enter First Name</th><td><input type="text" name="fname" placeholder="Enter First Name"></td></tr>
    <tr><th>Enter Middle Name</th><td><input type="text" name="mname" placeholder="Enter middle name"></td></tr>
    <tr><th>Enter Last Name</th><td><input type="text" name="lname" placeholder="Enter last name"></td></tr>
    <tr><th>Enter DOB</th><td><input type="text" name="DOB" placeholder="Enter DOB"></td></tr>
    <tr><th>Enter Nationality</th><td><input type="text" name="nat" placeholder="Enter Nationality"></td></tr>
    <tr><th>Enter Address</th><td><textarea type="text" name="addr" placeholder="Enter Address"></textarea></td></tr>
    <tr><th>Select Gender</th><td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="FeMale">FeMale<input type="radio" name="gender" value="Other">Other</td></tr>
    <tr><th>Upload Picture</th><td><input type="file" name="img"></td></tr>
    <tr><th colspan="2"><input type="submit" name="submit"></th></tr>
    </table>
    <a href="crud.php" id="btn1">Go to Home Click here...</a>
    <?php
    if(isset($_POST["submit"]))
    {
        $servername="localhost";
    $username="root";
    $password="";
    $database="phppassport";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn)
    {
        echo "Connection was Successful";
    }
    else
    {
        die("Failed to connect because of this error".mysqli_connect_error());
    }
    $pno =  $_REQUEST['pno'];
    $f_name =  $_REQUEST['fname'];
    $m_name = $_REQUEST['mname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['DOB'];
    $nation = $_REQUEST['nat'];
    $address = $_REQUEST['addr'];
    $gender =  $_REQUEST['gender'];
    $img = $_REQUEST['img'];
    $sql="INSERT INTO `passport`(`pno`,`f_name`,`m_name`,`l_name`,`dob`,`nation`,`address`,`gender`,`img`) VALUES ('$pno', '$f_name', '$m_name', '$lname','$dob','$nation','$address','$gender','$img')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
             echo "Record was inserted  successfully";
    }
    else
    {
            echo "Record was not inserted successfully because of this error<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    
    ?>
    </form>
    </center>
</body>
</html>