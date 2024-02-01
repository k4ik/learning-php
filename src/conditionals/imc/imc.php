<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <main>
        <form>
            <label for="">Enter your height(m):</label>
            <input type="text" placeholder="1.87">

            <label for="">Enter your weight(kg):</label>
            <input type="text" placeholder="89.3">

            <button type="submit">Calculate your BMI</button>
        </form>

        <div class="result">
            <?php 
                # imc = peso / (altura * altura)
            ?>
        </div>
    </main>
</body>
</html>