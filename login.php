<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
$username = $_POST['login'];
$password = $_POST['password'];

$s = "SELECT * FROM user WHERE username='$username';";

$p = "SELECT * FROM user WHERE username='$username';";

$result = mysqli_query($connect, $s);

$result_pas = mysqli_query($connect, $p);

$row = mysqli_fetch_assoc($result_pas);

$pas = password_verify($password, $row['password']);

$num = mysqli_num_rows($result);

if ($num == 1) {
    if ($pas == 1) {
        $_SESSION['user'] = htmlspecialchars($_POST['login']);
        header('Location: user.php');
    };
} else {
    header('Location: strLoginError.php');
}
