<?php

include('sql.php');

$surname = $_POST['surname'];

$s = "SELECT * FROM reserv WHERE surname='$username';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);


if ($num == 1) {
    header('Location: admin.php');
} else {
    $sql = "DELETE FROM reserv WHERE surname = $surname ";
    mysqli_query($connect, $sql);
    header('Location: admin.php');
}
