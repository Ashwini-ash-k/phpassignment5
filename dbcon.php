<?php
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
?>