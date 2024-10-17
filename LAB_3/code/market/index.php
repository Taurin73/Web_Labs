<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./market.css">
    <title>Web Market</title>
</head>
<body>
<nav>
    <div class="market-logo">Web Market</div>
</nav>
<div id="root">
    <div class="shadow-container">
        <h1>Sell your product</h1>
        <form action="./publish-product.php" method="post">
            <label for="category">Select the category</label>
            <select name="category" id="category" required>
                <?php
                $categories = scandir("./products");
                foreach($categories as $category) {
                    if('.' != $category AND '..' != $category) {
                        echo "<option value=\"$category\">$category</option>";
                    }
                }
                ?>
            </select>
            <label for="email">Your contact email</label>
            <input type="email" name="email" required>
            <label for="title">Product title</label>
            <input type="text" name="title" required>
            <label for="description">Description</label>
            <textarea name="description" cols="60" rows="4" required></textarea>
            <br>
            <button type="submit">Publish</button>
        </form>
    </div>
    <div id="offers-table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Email</th>
            <th>Description</th>
            </thead>
            <tbody>
            <?php
            for($i = 2; $i < count($categories); $i++) {
                $category = $categories[$i];
                $emails = scandir("./products/{$category}");
                for($j = 2; $j < count($emails); $j++) {
                    $email = $emails[$j];
                    $products = scandir("./products/{$category}/{$email}");
                    for($k = 2; $k < count($products); $k++) {
                        $title = $products[$k];
                        $desc = file_get_contents("./products/{$category}/{$email}/{$title}");
                        $categoryDisplay = ucfirst($category);
                        $formattedTitle = substr($title, 0, strlen($title) - 4);
                        echo "<tr>";
                        echo "<td>$categoryDisplay</td>";
                        echo "<td>$formattedTitle</td>";
                        echo "<td>$email</td>";
                        echo "<td>$desc</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
