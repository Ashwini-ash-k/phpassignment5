
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
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
            ";
        }
    }
    ?>
    </table>
</body>
</html>