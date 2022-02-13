<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$surname = $_POST['surname'];

$s = "SELECT * FROM reserv;";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

$reg = "INSERT INTO reserv(day, month, year, surname) VALUES ('$day', '$month', '$year', '$surname');";
mysqli_query($connect, $reg);
header('Location: user.php');
