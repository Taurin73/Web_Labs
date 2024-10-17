<?php
session_start();
if(false === isset($_SESSION['user-surname'], $_SESSION['user-name'], $_SESSION['user-patronymic'])) {
    header('Location: /forms.php');
    exit();
}
$surname = $_SESSION['user-surname'];
$name = $_SESSION['user-name'];
$patronymic = $_SESSION['user-patronymic'];
echo "<h1>Welcome, $surname $name $patronymic!</h1>";
