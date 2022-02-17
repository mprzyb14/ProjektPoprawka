<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');

if ($connect) {
} else {
    die('Błąd połączenia z bazą danych');
}
