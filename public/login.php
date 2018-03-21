<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['username']=$username;
    }
    else $fmsg = "Invalid username or password";
}
if(isset($_SESSION['username'])){
    $smsg = "User already logged in";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="block">

    <?php if(isset($smsg)) { ?><div class="alert_success" role=""alert"><?php echo $smsg; ?></div>
    <?php } ?>
    <?php if(isset($fmsg)) { ?><div class="alert_failure" role=""alert"><?php echo $fmsg; ?></div>
    <?php } ?>

    <form class="form" method="POST">
        <h2>Please login</h2>
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required><br><br>
        </div>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required><br><br>
        <button type="submit">Login</button><br>
        <a href="register.php">Register></a>
        <a href="logout.php">Logout></a>
    </form>
</div>
</body>
</html>