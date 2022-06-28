<?php
require_once 'db.php';

$register_query = $mysqli->query("SELECT * FROM tbl_users");


if(isset($_POST['register'])){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($mysqli->query( $register_query)) {
        $_SESSION['message'] = "Record inserted successfully.";
    }

    if ($mysqli->errno) {
        $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
    }

    header("Location: index.php");
}

$id = $_GET["id"];
                                                                                                                     
$query = "SELECT * FROM tbl_users WHERE id = '$id'";
$sql = $mysqli->query($query);

$contact = $sql->fetch_assoc();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlte</title>
</head>
<body>
    <div class="heading">
        <h1>AdminLTE</h1>
        <h2>Sign in to start your session</h2>
    </div>
    <form class="login-form" method="post" action="signin.php">
    <input type="hidden" value="<?php echo $contact["id"]; ?>" name="id" />
        <table>
            <tr>
            <td>Email: </td>
                <td><input type="email" name="email" placeholder="email" value="<?php echo $contact["email"]; ?>" />
            </tr>
            <tr>
            <td>Password: </td>
                <td><input type="password" name="password" name="password" placeholder="password" value="<?php echo $contact["email"]; ?>" />
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="sign in" value="sign in">
            </tr>
        </table>
        <!-- <div class="container forgetpassword">
                <p>I forgot my password <a href="#">Forgetpassword</a>.</p>
                </div> -->
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
               
                <p>I forgot my password <a href="newpassword.php?id=<?php echo $user_data['id'];?>">Forgetpassword</a>.</p>
            
            </tr>
        <?php   }   
    ?>
   
</body>
</html>