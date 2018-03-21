<?php
$connection = mysqli_connect('localhost','root', 'arminas9');
if(!$connection){
    die("DB Connection failed" . mysqli_error($connection));
}
$selection = mysqli_select_db($connection, 'Login_Details');
if(!$selection){
    die("DB Selection failed" . mysqli_error($connection));
}
?>