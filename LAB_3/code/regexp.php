<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegExp Task</title>
</head>
<body>
<h1>RegExp Part 1</h1>
<?php
$str = 'ahb acb aeb aeeb adcb axeb';
?>
<div>Example string: <b><?php echo $str;?></b></div>
<?php
$regexp = '/a..b/';
?>
<div>RegExp: <b><?php echo $regexp?></b></div>

<?php
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
?>
<div>Total RegExp matches: <b><?php echo $count?></b></div>
<br>
<div>
    Matching strings:<br>
    <?php
    foreach($matches[0] as $match) {
        echo "<b>$match</b><br>";
    }
    ?>
</div>
<hr>
<h1>RegExp Part 2</h1>
<?php
$numericStr = "a1b2c3efo4";
$numericRegexp = '/[0-9]+/';
?>
<div>Example string: <b><?php echo $numericStr?></b></div>
<div>RegExp: <b><?php echo $numericRegexp?></b></div>
<?php
$putPower = function($matches) {
    return pow($matches[0], 3);
};
$result = preg_replace_callback($numericRegexp, $putPower, $numericStr)
?>
<div>Result: <b><?php echo $result?></b></div>
</body>
</html>