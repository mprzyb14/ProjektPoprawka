<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
$username = $_POST['login'];
$password = $_POST['password'];

$s = "SELECT * FROM useradmin WHERE username='$username' && password='$password';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('Location: admin.php');
} else {
    header('Location: strLoginAdminError.php');
}
