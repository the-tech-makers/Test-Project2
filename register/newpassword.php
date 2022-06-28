<?php
require_once 'db.php';

$register_query = $mysqli->query("SELECT * FROM tbl_users");

if(isset($_POST['register'])){
    $id = $_POST['id'];
    $email = $_POST['email'];
    if ($mysqli->query( $register_query)) {
        $_SESSION['message'] = "Record inserted successfully.";
    }

    if ($mysqli->errno) {
        $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
    }

    header("Location: signin.php");
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
        <h2>You forgot your password? Here you can easily retrieve a new password.</h2>
    </div>
    <form class="login-form" method="post" action="newpassword.php">
    <input type="hidden" value="<?php echo $contact["id"]; ?>" name="id" />
        <table>
            <tr>
            <td>Email: </td>
                <td><input type="email" name="email" placeholder="email" value="<?php echo $contact["email"]; ?>" />
            </tr>
            <!-- <tr>
                <td colspan="2"><input type="submit" name="request new password" value="Request new password">
            </tr> -->
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
            <td><button class="btn"> <a href="changepwd.php?id=<?php echo $user_data['id']; ?>">request new password</a></button> </td>
            
            </tr>
        <?php   }   
    ?>
    
</body>
</html>