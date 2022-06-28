<?php
require_once 'db.php';

if(isset($_POST['register'])){
    $id = $_POST['id'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirmpassword']);

    if ($mysqli->query( $register_query)) {
        $_SESSION['message'] = "Record inserted successfully.";
    }

    if ($mysqli->errno) {
        $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
    }

    header("Location: newpassword.php");
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
        <h2>You are only one step a way from your new password, recover your password now.</h2>
    </div>
    <form class="login-form" method="post" action="changepwd.php">
    <input type="hidden" value="<?php echo $contact["id"]; ?>" name="id" />
        <table>
            <tr>
            <td>Password: </td>
                <td><input type="password" name="password" placeholder="password" value="<?php echo $contact["password"]; ?>" />
               
            </tr>
            <tr>
                <td>Confirmpassword:</td>
                <td><input type="password" name="password" placeholder="password" value="<?php echo $contact["confirmpassword"]; ?>" />
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="change password" value="Change password">
            </tr>
        </table>
        
    </form>
    
</body>
</html>