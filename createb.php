<?php
if(isset($_POST['submit']))
{
    include "dbcon1.php";
    $acno=$_POST['acno'];
    $name=$_POST['fname'];
    $addr=$_POST['addr'];
    $actype=$_POST['actype'];
    $bal=$_POST['bal'];
    if($bal>500)
    {
        $sql="INSERT INTO `bankacc`(`acno`,`name`,`addr`,`actype`,`bal`) VALUES ('$acno', '$name','$addr','$actype','$bal')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
             echo "Record was inserted  successfully";
    }
    else
    {
            echo "Record was not inserted successfully because of this error<br>".mysqli_error($conn);
    }
    }
    else
    {
        echo "Minimum Balance Should be greater than 500<br>";
    }
    echo "<br><center><a href='createacc.php>Go Back</a></center>";
    mysqli_close($conn);
}

?>