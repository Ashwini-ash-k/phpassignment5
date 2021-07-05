<?php
if(isset($_POST['submit']))
{
    include "dbcon1.php";
    $acno=$_POST['accno'];
    $amt=$_POST['amt'];
    if($amt>500)
    {
        $sql="SELECT * FROM bankacc WHERE acno=$acno";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    echo $count;
    if($count>0)
    {
        $sql1="SELECT bal FROM bankacc WHERE acno=$acno";
        $result1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $bal=$row['bal'];
        if($bal>$amt)
        {
            $amtbal=$bal-$amt;
            $sql2="UPDATE bankacc SET bal=$amtbal WHERE acno=$acno";
            $data=mysqli_query($conn,$sql2);
            if($data)
            {
                echo "<br>Amount widthdrawn successfully....Total Amount is".$amtbal;
            }
            else
            {
                echo "We could not able to update the amount";
            }
        }
        else
        {
            echo "No sufficiant amount to withdraw";
        }
    }
    else
    {
        echo "Account number does not match";    
    }
    }
    else
    {
        echo "Widthdrawal amount should be greater than 500";
    }
    
    echo "<br><br><a href='homebank.html'>Go Back</a>";
}
?>