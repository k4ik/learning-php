<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <form method="POST">
        <input type="number" placeholder="Enter a value" name="value">
        <input type="number" placeholder="Enter another value" name="anotherValue">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = $_POST["value"];
        $anotherValue = $_POST["anotherValue"];

        echo sum($value, $anotherValue);
    } else {
        echo "Error.";
    }

    function sum(int $value, int $anotherValue) {
        $sum = $value + $anotherValue;

        return $sum;
    }
?>