<!-- insert data into db -->
<?php
// include db connection
include("connection/conn.php");
// data feched
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mark=$_POST['mark'];

    // Insert Data

$sql="INSERT INTO `crud_tbl`(`id`, `fname`, `lname`, `mark`) VALUES ('0','$fname','$lname','$mark')";
$rs=mysqli_query($conn,$sql);
if($rs)
{
	echo "record added";
    header('location:index.php');
}
?>






