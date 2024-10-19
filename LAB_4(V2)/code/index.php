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
                <option value="cars">cars</option>
                <option value="phones">phones</option>
                <option value="other">other</option>
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
            require('vendor/autoload.php');
            $client = new Google_Client();
            $client->setApplicationName('weblab4');
            $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
            $client->setAccessType('offline');
            $client->setAuthConfig('credentials.json');

            $service = new Google_Service_Sheets($client);
            $spreadsheetId = "1pxlJVHDxPoiJSIfNY3oeonBGgFF1-UmRKOE6OS6WGSU";
            $listName = "List1";

            $rows = $service->spreadsheets_values->get($spreadsheetId, $listName)->getValues();
            foreach($rows as $row) {
                echo "<tr>";
                foreach($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
