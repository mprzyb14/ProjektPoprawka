<?php

$connect = mysqli_connect('localhost', 'root', '', 'test');
if ($connect) {
} else {
    die('Błąd połączenia z bazą danych');
}
$surname = $_POST['surname'];
$sql = "DELETE FROM reserv WHERE surname = $surname ";
mysqli_query($connect, $sql);
header('Location: admin.php');
