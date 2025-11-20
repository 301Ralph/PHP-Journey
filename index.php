<?php
    $radius = $_POST ["radius"];
    $circumference = null;

    $circumference = 2 * pi() * $radius;


    echo $circumference;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="radius">
    </form>
</body>
</html>

