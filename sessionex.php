<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=<?php echo $_SERVER['PHP_SELF'] ?>  method="POST">
<center>
<table border=1 cellpadding=10>
<tr><th colspan="2" style="background-color:#ccc;width:350px;">Login</th></tr>
<tr><th>User Name</th><td><input type="text" name="name" ></td></tr>
<tr><th>Password</th><td><input type="password" name="pass"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" onclick="show()" name="submit"><button onclick="show()" name="logout">Logout</td></tr>
</table><br>
<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_SESSION['uname'])&&isset($_SESSION['pass']))
        {
            if($_SESSION['uname']==$_POST['name']&&$_SESSION['pass']==$_POST['pass'])
            {
                echo "Welcome back".$_POST['name'];
            $_SESSION['view']=$_SESSION['view']+1;
            echo "Number of time you visited".$_SESSION['view'];
            }
        }
        else
        {
            $_SESSION['uname']=$_POST['name'];
            $_SESSION['pass']=$_POST['pass'];
            $_SESSION['view']=1;
            echo "Visiting for the first time";
        }
    }
    if(isset($_POST['logout']))
    {
        session_unset();
        echo "logged out";
    }
?>
</center>
</form>
</body>
</html>