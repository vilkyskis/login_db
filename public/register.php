<?php
require_once('connect.php');
//print_r($_POST);

if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = md5($_POST['password']);
    $sql = "INSERT INTO `login` (username,email,password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $sql);
    if($result){
        echo "Success";
    }
    else echo "Fail";

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="block">
    <form class="form" method="POST">
        <h2>Please register</h2>
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
            <br><br>
        </div>

        <input type="text" name="email" id="inputEmail" placeholder="Email address" required autofocus>
        <br>
        <br>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
        <br>
        <br>
        <button type="submit">Register</button><br>
        <a href="login.php">Login></a>
    </form>
</div>
</body>
</html>