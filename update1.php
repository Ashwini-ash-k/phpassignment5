
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" cellspacing=10 cellpadding=10 align=center>
    <tr>
    <th>Passport Number</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Nationality</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Photo</th>
    <th>Operations</th>
    <?php
    include "dbcon.php";
    error_reporting(0);
    $query="SELECT * FROM passport";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
        while($result=mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
            <td>".$result['pno']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['mname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['nation']."</td>
            <td>".$result['address']."</td>
            <td>".$result['gender']."</td>
            <td><img src=".$result['pic']."/></td>
            <td><a href='update2.php?pno=$result[pno]&fn=$result[fname]&mn=$result[mname]&ln=$result[lname]&db=$result[dob]&na=$result[nation]&addr=$result[address]&gen=$result[gender]'>Update</a></td>
            <td><a href='update2=1.php?pno=$result[pno]'>Delete</a></td>
            ";
        }
    }
    ?>
    </table>
    <a href="crud.php" id="btn1">Go to Home Click here...</a>
</body>
</html>