<?php
session_start();
if(false === isset($_SESSION['employee'])) {
    header('Location: /forms.php');
    exit();
}
$arr = $_SESSION['employee'];
echo "<h1>Employee information</h1>";
echo "<ul>\n";
foreach($arr as $item) {
    echo "<li>$item</li>\n";
}
echo "</ul>";
