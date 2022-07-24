<!-- delete a record -->
<?php
// include connection page
include("connection/conn.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM `crud_tbl` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    if ($result == TRUE) {
        // redirecting to the display page(index.php) in our case
        header('Location: index.php');
    }
}
?>




