<?php
$acno=rand(0,100);
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
    <form action="createb.php" method="POST" style="margin-top:150px;">
    <table border="1" cellspacing="10" cellpadding="10" style="margin-top:150px;background-color:gray">
    <tr><th colspan="2" style="margin-top:150px;background-color:red;font-size:30px;">Create Account</th></tr>
    <tr><th>Account number</th><td><input type="text" name="acno" value="<?php echo $acno=rand(0,100);?>" readonly></td></tr>
    <tr><th>Enter Name</th><td><input type="text" name="fname" placeholder="Enter First Name"></td></tr>
    <tr><th>Enter Address</th><td><textarea type="text" name="addr" placeholder="Enter Address"></textarea></td></tr>
    <tr><th>Account Type</th><td><input type="radio" name="actype" value="SB">SB<input type="radio" name="actype" value="FD">FD</td></tr>
    <tr><th>Enter Balance</th><td><input type="text" name="bal" placeholder="Minimum 500"></td></tr>
    <tr><th colspan="2"><input type="submit" name="submit"></th></tr>
    </table>
    </form>
    <br>
    <br>
    <a href="homebank.html"/>Go Back to Home</a>
</body>
</html>