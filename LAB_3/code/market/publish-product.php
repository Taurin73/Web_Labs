<?php
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $dirName = "./products/{$category}/{$email}";
    if(false === mkdir($dirName)) {
        throw new Exception("Cannot create user folder");
    }
    chmod($dirName, 0777);
    $fileName = "$dirName/{$title}.txt";
    if(false === file_put_contents($fileName, $desc)) {
        throw new Exception("Cannot create product file");
    }
    chmod($fileName, 0777);
}
header('Location: /market/index.php');
exit();
