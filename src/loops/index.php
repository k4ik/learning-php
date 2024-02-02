<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <style>
        main {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            width: 100%;
            margin: 0 auto 30px;
        }

        input {
            width: 100%;
        }
    </style>
</head>
<body>
    <main>
        <h1>Multiplication Table Generator</h1>
        <form method="post">
            <div>
                <label for="number">what number do you want?</label>
                <input type="text" placeholder="6" name="number">
            </div>

            <div>
                <label for="quantity">up to which number do you want?</label>
                <input type="text" placeholder="6" name="quantity">
            </div>

            <button type="submit">Submit</button>
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["number"];
                $quantity = $_POST["quantity"];

                getMultiplicationTable($number, $quantity);
            }

            function getMultiplicationTable($number, $quantity) {
                for($i = 0; $i < ($quantity+1); $i++) {
                    $result = ($i * $number);
                    echo "$number * $i = $result<br>";
                }
            }
        ?>
    </main>
</body>
</html>