<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab5</title>
    <link rel="stylesheet" type="text/css" href="tableView.css">
</head>
<body>
<div id="form">
    <form method="post">
        <label for="email" >Email</label>
        <input type="email" name="email" required>
        <label for="categories">Category</label>
        <select name="categories" required>
            <option value="electronics" >electronics</option>
            <option value="chancellery" >chancellery</option>
            <option value="food" >food</option>
            <option value="clothes" >clothes</option>
        </select> <br>
        <label for="title" >Title</label>
        <input type="text" name="title" required> <br>
        <label for="text" >Description</label>
        <textarea rows="10" cols="50" name="text"></textarea> <br>
        <input type="submit" value="Save">
        <?php
        if (false === isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) exit();

        $title = $_POST["title"];
        $description = $_POST["text"];
        $email = $_POST["email"];
        $category = $_POST["categories"];

        /*Подключение к серверу*/
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
        /*Сохраняем данный в базу данных*/
        $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
        $mysqli->close();
        ?>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>Email</th>
        </thead>
        <tbody>
        <?php
        /*Подключение к серверу*/
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');

        /*Заполняю табличку на сайте*/
        if($result = $mysqli->query('SELECT * FROM ad')){ // условие, которое выыполнится, если считалось с базы данных
        while ($row = $result->fetch_assoc()){
        $category = $row['category'];
        $title = $row['title'];
        $description = $row['description'];
        $email = $row['email'];
        echo "<tr>";
            echo "<td>$category</td>";
            echo "<td>$title</td>";
            echo "<td>$description</td>";
            echo "<td>$email</td>";
            echo "</tr>";
        }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
