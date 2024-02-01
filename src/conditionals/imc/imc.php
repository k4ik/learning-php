<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-color: #f0f8ff;
            --form-bg-color: #fff2cc;
            --button-bg-color: #f6b26b;
            ---button-bg-color-hover: #cd9962;
        }

        body {
            background-color: var(--bg-color);
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form, .result {
            display: flex;
            flex-direction: column;
            max-width: 320px;
            width: 100%;
        }

        form {
            background-color: var(--form-bg-color);
            padding: 10px;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }

        button {
            background-color: var(--button-bg-color);
            outline: none;
            border: 1px solid var(---button-bg-color-hover);
        }

        button:hover {
            transition: 0.5s;
            background-color: var(---button-bg-color-hover);
        }

        .result {
            background-color: var(--form-bg-color);
            padding: 5px 0 10px 0;
            text-align: center;
        }

    </style>
</head>
<body>
    <main>
        <form method="post" class="form">
            <label for="">Enter your height(m):</label>
            <input type="text" placeholder="1.87" name="height">

            <label for="">Enter your weight(kg):</label>
            <input type="text" placeholder="89.3" name="weight">

            <button type="submit">Calculate your BMI</button>
        </form>

        <div class="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $height = $_POST["height"];
                    $weight = $_POST["weight"];
                    $height = (float) $height;
                    $weight = (float) $weight;

                    $bmi = number_format(getBMI($height, $weight), 2, ".", "");
                    echo "<p class='bmi'>BMI: $bmi</p>";

                    $status = getStatus($bmi);
                    echo "<p class='status'>STATUS: $status</p>";
                } else {
                    echo "invalid request method";
                }

                function getBMI(float $height, float $weight) {
                    $bmi = $weight / ($height * $height);
                    return $bmi;
                }

                function getStatus(float $bmi) {
                    $status = null;

                    if ($bmi < 18.5) {
                        $status = "Underweight";
                    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                        $status = "Normal weight";
                    } elseif ($bmi >= 25.0 && $bmi < 29.9) {
                        $status = "Overweight";
                    } elseif ($bmi >= 30.0 && $bmi < 34.9) {
                        $status = "Obesity (Class I)";
                    } elseif ($bmi >= 35.0 && $bmi < 39.9) {
                        $status = "Obesity (Class II)";
                    } elseif ($bmi >= 40.0) {
                        $status = "Obesity (Class III)";
                    } else {
                        echo "Error.";
                    }

                    return $status;
                }
            ?>
        </div>
    </main>
</body>
</html>