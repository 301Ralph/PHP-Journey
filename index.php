<?php
    $food = "Pizza";
    $price = 10.00;
    $qty = $_POST["qty"];
    $total = $price * $qty;

    echo "Food Item: $food <br>";
    echo "Total: $total <br>";
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
        <label>Quantity:</label>
        <input type="text" name="qty"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html>

