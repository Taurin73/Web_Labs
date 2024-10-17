<?php
if(false === isset($_REQUEST['text-example'])) {
    header('Location: /forms.php');

    exit();
}
$text = $_REQUEST['text-example'];
echo "Your text: ", $text, "<br>";
echo "Word count: ", str_word_count($text), "<br>";
echo "Character count: ", strlen($text);
