<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    ?>
<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>  method="POST">
<center>
<table border=1 cellpadding=10>
<tr><th colspan="2" style="background-color:#ccc;width:350px;">Set Your Flight Preference</th></tr>
<tr><th>Name</th><td><input type="text" name="name"></td></tr>
<tr><th>Seat Selection</th><td><input type="radio" name="seat" value="Window">Window<input type="radio" name="seat" value="Center">Center<input type="radio" name="seat" value="Aside">Aside</td></tr>
<tr><th>Meal Selection</th><td><input type="radio" name="meal" value="Veg">Veg<input type="radio" name="meal" value="Nonveg">Nonveg<input type="radio" name="meal" value="Diabetic">Diabetic<input type="radio" name="meal" value="Child">Child</td></tr>
<tr><td colspan="2" align="center"><input type="submit" onclick="show()" name="submit"></td></tr>
</table><br>
<input type="submit" name="cookievalue" value="ViewDetails">
</center>
<?php
if(isset($_COOKIE["uname"]))
{
    echo "<br><center>welcome back</center>"."<center>",$_COOKIE["uname"],"</center><br>";
    echo "<center>last visited</center>"."<center>",$_COOKIE["user_name"],"</center><br>";
}    
else
    echo "<center>welcome guest</center>";

if(isset($_POST["submit"]))
{
    if(isset($_POST["name"]))
    {
        date_default_timezone_set('Asia/Calcutta');
        $inTwomonth=60*60*24*60+time();
        $name=$_POST["name"];
        setcookie("user_name",date("G:i-m/d/y"),$inTwomonth);
        setcookie("uname",$name);
        setcookie("seat",$_POST["seat"]);
        setcookie("meal",$_POST["meal"]);
        echo "<center>Cookie Has Been set</center>";
    }
    
        
}
if(isset($_POST["cookievalue"]))
{
    if(isset($_COOKIE["uname"])&&isset($_COOKIE["seat"])&&isset($_COOKIE["meal"]))
    {
        echo "<div align=center><h1>Thank you for Booking</h1><hr><h2>Name:".$_COOKIE["uname"],"<br>Seat:".$_COOKIE["seat"],"<br>","Meal:".$_COOKIE["meal"],"<br></h2></div>";
       
    }
    
}

?>
</form>

</body>
</html>
