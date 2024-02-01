<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
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