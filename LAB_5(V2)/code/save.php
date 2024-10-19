<?php
function redirectToHome(): void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) {
    redirectToHome();
}

$email = $_POST["email"];
$category = $_POST["categories"];
$title = $_POST["title"];
$text = $_POST["text"];

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_error()){
    printf("Подключение к серверу MySQL невозможно, Код ошибки: %s\n", mysqli_connect_error());
    redirectToHome();
}

$mysqli->query("INSERT INTO ad (email, category, title, description) VALUES ('$email', '$category', '$title', '$text')");
$mysqli->close();
redirectToHome();
