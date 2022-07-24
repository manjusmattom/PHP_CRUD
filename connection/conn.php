<!-- connection page -->
<?php
$host="localhost";
$username="root";
$password="";
$db_name="crud_db";
$conn=mysqli_connect($host,$username,$password,$db_name);
if(!$conn)
{
echo "connection failed";
}
?>
