<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            width: 100%;
            background-color: #f8f8f8;
            padding: 20px;
        }

        input {
            margin-bottom: 20px;
        }

        select {
            margin-bottom: 10px;
        }

        button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <main>
        <form method="post">
            <label for="value">Enter a value:</label>
            <input type="number" placeholder="4" name="value">

            <select name="operators" id="">
                <option value="">Select a option</option>
                <option value="addition">+</option>
                <option value="subtraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>

            <label for="value">Enter another value: </label>
            <input type="number" placeholder="2" name="anotherValue">

            <button type="submit">Calculate</button>

            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $value = $_POST["value"];
                    $anotherValue = $_POST["anotherValue"];
                    $operators = $_POST["operators"];

                    $result = match($operators) {
                        "addition" => addition($value, $anotherValue),
                        "subtraction" => subtraction($value, $anotherValue),
                        "multiplication" => multiplication($value, $anotherValue),
                        "division" => division($value, $anotherValue),
                        default => "select an operation"
                    };

                    echo "<p>$result</p>";
                }

                function addition(int $num1, int $num2) {
                    return $num1 + $num2;
                }

                function subtraction(int $num1, int $num2) {
                    return $num1 - $num2;
                }

                function multiplication(int $num1, int $num2) {
                    return $num1 * $num2;
                }

                function division(int $num1, int $num2) {
                    if ($num1 == 0 || $num2 == 0) {
                       echo "Division by zero is not allowed";
                    } else {
                        return $num1 / $num2;
                    }
                }
            ?>
        </form>
    </main>
</body>
</html>