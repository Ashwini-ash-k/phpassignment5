<?php
include "dbcon.php";
$pno=$_GET['pno'];
$fn=$_GET['fn'];
$mn=$_GET['mn'];
$ln=$_GET['ln'];
$dob=$_GET['db'];
$na=$_GET['na'];
$addr=$_GET['addr'];
$gen=$_GET['gen'];
?>
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
    <tr><th>Enter Passport number</th><td><input type="text" name="pno" value="<?php echo "$pno"; ?>" readonly ></td></tr>
    <tr><th>Enter First Name</th><td><input type="text" name="fname" value="<?php echo "$fn"; ?>"></td></tr>
    <tr><th>Enter Middle Name</th><td><input type="text" name="mname" value="<?php echo "$mn"; ?>"></td></tr>
    <tr><th>Enter Last Name</th><td><input type="text" name="lname" value="<?php echo "$ln"; ?>"></td></tr>
    <tr><th>Enter DOB</th><td><input type="text" name="DOB" value="<?php echo "$dob"; ?>"></td></tr>
    <tr><th>Enter Nationality</th><td><input type="text" name="nat" value="<?php echo "$na"; ?>"></td></tr>
    <tr><th>Enter Address</th><td><textarea type="text" name="addr" value="<?php echo "$addr"; ?>" ><?php echo "$addr"; ?></textarea></td></tr>
    <tr><th>Select Gender</th><td><input type="radio" name="gender" value="Male" <?php if($gen=="Male") echo "checked"?>>Male<input type="radio" name="gender" value="FeMale" <?php if($gen=="FeMale") echo "checked"?>>FeMale<input type="radio" name="gender" value="Other">Other</td></tr>
    <tr><th>Upload Picture</th><td><input type="file" name="img"></td></tr>
    <tr><th colspan="2"><input type="submit" name="submit"></th></tr>
    </table>
    <?php
if(isset($_POST['submit']))
{
    $pno=$_POST['pno'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $dob=$_POST['DOB'];
    $nation=$_POST['nat'];
    $address=$_POST['addr'];
    $gen=$_POST['gender'];
    echo $pno;
    $query="UPDATE passport SET fname='$fname',mname='$mname',lname='$lname',dob='$dob',nation='$nation',gender='$gen' WHERE pno='$pno'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "<br>We updated the record successfully";
    }
    else
    {
        echo "We could not able to update the record";
    }
}
?>
    <a href="crud.php" id="btn1">Go to Home Click here...</a>
    </form>
</body>
</html>
