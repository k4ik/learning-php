<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #d8dfe5;
            max-width: 500px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 20px;
        }

        input, button {
            width: 100%;
            border: none;
            outline: none;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }

        button {
            margin-top: 10px;
            padding: 5px;
        }

        button:hover {
            transition: .2s;
            background-color: #FF5733;
        }
    </style>
</head>
<body>
    <main>
        <form method="post">
            <label for="value">Enter a value:</label>
            <input type="number" placeholder="2" name="value">
            <label for="value">Enter another value:</label>
            <input type="number" placeholder="5" name="anotherValue">
            <button type="submit">Submit</button>


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
        </form>
    </main>
</body>
</html>