<!-- registration page(to enter details) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css"> 
    <body>
        <!-- include header -->
            <form class="form" method="POST" action="insert.php">
                <div class="container">
                    <!-- Form Fields -->
            <table class="table">
            <h1>Registration Form</h1>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input type="text"  name="fname" id="fname" placeholder="First Name" required></td>
                </tr>
                <tr>
                <td>
                    <label>Last name:</label></td>
                    <td> <input type="text" name="lname" id="lname" placeholder="Last Name" required></td> 
                </tr>
                <tr>
                    <td><label>Mark:</label></td>
                    <td><input type="text" name="mark" id="mark" placeholder="mark" required></td>
                 </tr>
                 <tr>
                     <td><button class="btn btn-primary" onclick="return confirm('Record created')">submit</button> </td>
        
                </tr>
            </table>
            </form>
        </div>
            
            <script type="text/javascript" src="js/register.js"></script>
</body>
</html>