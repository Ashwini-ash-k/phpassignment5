<?php
include "dbcon.php";
$pno=$_GET['pno'];
$query="DELETE FROM passport WHERE pno='$pno'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "<br>We Deleted the record successfully";
    }
    else
    {
        echo "We could not able to Deleted the record";
    }
    echo "<a href='crud.php'>Go to Home Click here...</a>";
?>