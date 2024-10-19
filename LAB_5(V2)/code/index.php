<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito</title>
</head>
<body>
<div id="form">
    <form method="post" action="save.php">
        <label for="email">Email</label>
        <label>
            <input type="email" name="email" required>
        </label>

        <label for="categories">Category</label>
        <label>
            <select name="categories" required>
                <option value="Cars">Cars</option>
                <option value="Other">Other</option>
            </select>
        </label>

        <label for="title">Title</label>
        <label>
            <input type="text" name="title" required>
        </label>

        <label for="text">Description</label>
        <label>
            <textarea rows="5" name="text"></textarea>
        </label>

        <input type="submit" value="Save">

    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
        if (mysqli_connect_error()){
            printf("Подключение к серверу MySQL невозможно, Код ошибки: %s\n", mysqli_connect_error());
            exit();
        }
        $ads = $mysqli->query('SELECT * FROM ad ORDER BY created DESC');
        while($row = $ads->fetch_assoc()) {
            echo "<tr>";
            foreach(['category', 'title', 'description'] as $field) {
                echo '<td>', $row[$field], "</td>";
            }
            echo "</tr>";
        }
        $ads->close();
        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
