<?php

include('sql.php');

$username = $_POST['login'];
$password = $_POST['password'];

$long = strlen($password);

$s = "SELECT * FROM user WHERE username='$username';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

$pas = password_hash($password, PASSWORD_DEFAULT);

if ($long > 8) {
    if ($num == 1) {
        header('Location: strRegistError.php');
    } else {
        $reg = "INSERT INTO user(username, password) VALUES ('$username', '$pas');";
        mysqli_query($connect, $reg);
        header('Location: index.php');
    }
} else {
    header('Location: strRegistError.php');
}
