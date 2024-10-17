<?php
session_start();
if(true === isset($_POST['user-surname'], $_POST['user-name'], $_POST['user-patronymic'])) {
    $_SESSION['user-surname'] = $_POST['user-surname'];
    $_SESSION['user-name'] = $_POST['user-name'];
    $_SESSION['user-patronymic'] = $_POST['user-patronymic'];
}
header('Location: /forms.php');
exit();
