<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = (int) $_POST["side1"];
        $side2 = (int) $_POST["side2"];
        $side3 = (int) $_POST["side3"];
    }

    function isTriangle($side1, $side2, $side3) {
        if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
            echo "It's a triangle";

            
        } else {
            echo "It's not a triangle";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is triangle?</title>
</head>
<body>
    <form method="post">
        <label for="side1">Side 1</label>
        <input type="text" placeholder="6" name="side1">

        <label for="side2">Side 2</label>
        <input type="text" placeholder="6" name="side2">

        <label for="side3">Side 3</label>
        <input type="text" placeholder="6" name="side3">

        <button type="submit">Submit</button>
    </form>

    <p><?php isTriangle($side1, $side2, $side3);?></p>
</body>
</html>