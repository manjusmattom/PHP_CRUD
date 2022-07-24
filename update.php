<!-- to update an existing record -->
<?php 
// include connection page
include("connection/conn.php");
// updates values in a db using post method
if (isset($_POST['update']))
 {
     $firstname = $_POST['firstname'];
     $id = $_POST['id'];
     $lastname = $_POST['lastname'];
     $mark = $_POST['mark']; 
     $sql = "UPDATE `crud_tbl` SET `fname`='$firstname',`lname`='$lastname',`mark`='$mark' WHERE `id`='$id'"; 
     $result=mysqli_query($conn,$sql);
     if ($result == TRUE) {
         header('Location: index.php');
        }
    } 
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        $sql = "SELECT * FROM `crud_tbl`  WHERE `id`='$id'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_array($result))
             {
                $first_name = $row['fname'];
                $lastname = $row['lname'];
                $mark = $row['mark'];
                $id = $row['id'];
            } 
    ?>
    

    <!-- page loading for updation -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>

    <h2>User Update Form</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="">First name:</label> </td>
                <td><input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>"></td></tr>
                <tr>
                    <td><label for="">Last name:</label></td>
                    <td><input type="text" name="lastname" value="<?php echo $lastname; ?>" ></td>
                </tr>
                <tr>
                    <td><label for="">Mark:</label></td>
                    <td><input type="number" name="mark" value="<?php echo  $mark; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="update" onclick="return confirm('Record Updated successfully')"></td>
                </tr>
        </table>

    
    </form>
        </body>
        </html> 
    <?php
    } else{ 
        header('Location: index.php');
    } 
}
?>
 