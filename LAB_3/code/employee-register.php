<?php
session_start();
if(true === isset($_POST['name'], $_POST['age'], $_POST['salary'], $_POST['email'], $_POST['position'])) {
    $_SESSION['employee'] = [$_POST['name'], $_POST['age'], $_POST['salary'], $_POST['email'], $_POST['position']];
}
header('Location: /forms.php');
exit();