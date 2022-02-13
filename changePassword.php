<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');
$username = $_POST['login'];
$password = $_POST['password'];

$s = "SELECT * FROM user WHERE username='$username';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

$pas = password_hash($password, PASSWORD_DEFAULT);

if ($num == 1) {
    header('Location: settings.php');
} else {
    $reg = "UPDATE test SET password='$password' WHERE user='$username';";
    mysqli_query($connect, $reg);
    header('Location: user.php');
}
