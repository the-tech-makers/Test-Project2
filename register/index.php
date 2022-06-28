<?php
require_once 'db.php';

$register_query = $mysqli->query("SELECT * FROM tbl_users");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="heading">
        <h1>AdminLTE</h1>
        <h2>Register a new membership</h2>
    </div>
    <form class="simple-form" method="post" action="add.php">
        <table>
            <tr>
                <td>First name: </td>
                <td><input type="text" name="first_name" placeholder="First Name">
            </tr>
            <tr>
                <td>Last name: </td>
                <td><input type="text" name="last_name" placeholder="Last Name">
            </tr>

            <tr>
            <td>Email: </td>
                <td><input type="email" name="email" placeholder="Email">
              </tr>

              <tr>
            <td>Password: </td>
                <td><input type="password" name="password" placeholder="Password">
              </tr>

              <td>Phone: </td>
                <td><input type="text" name="phone" placeholder="Phone">
            </tr>

            <td>Address: </td>
                <td><input type="text" name="address" placeholder="address">
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="register" value="Register">
            </tr>
        </table>    
    </form>
    <div class="message">
        <?php 
        if( isset( $_SESSION["message"] ) ) {
            echo "<p>". $_SESSION["message"] . "</p>";
            unset($_SESSION["message"]);
        }
        ?>
    </div>
    <?php
        while($user_data = $register_query->fetch_assoc() ){  ?>
            <tr>
               
                <p>Register a new membership <a href="signin.php?id=<?php echo $user_data['id'];?>">Register</a>.</p>
            
            </tr>
        <?php   }   
    ?>


</body>
</html>