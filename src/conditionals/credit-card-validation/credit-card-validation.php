<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Credit Card Validator</h1>
            <form method="post">
                <input type="text" placeholder="1234567890123456" name="cardNumber">
                <button type="submit">Submit</button>
            </form>
            <?php
                if ($_SERVER["METHOD_REQUEST"] == "") {
                    $cardNumber = $_POST["cardNumber"];
                    if(validationCardNumber($cardNumber)) {
                        echo "the card number is valid";
                    } else {
                        echo "the card number is invalid";
                    }
                } else {
                    echo "Enter your card number so we can validate";
                }
                function validationCardNumber($cardNumber) {
                    $cardNumber = str_replace(array(" ", "-"), " ", $cardNumber);
                    $cardNumber = strrev($cardNumber);
                    $sum = 0;
                    for($i = 0, $lenght = strlen($cardNumber); $i < $lenght; $i++) {
                        $digit = (int)$cardNumber[$i];
                        if ($i % 2 === 0) {
                            $sum += $digit;
                        } else {
                            $digit *= 2;
                            if ($digit > 9) {
                                $digit -= 9;
                            }
                            $sum += $digit;
                        }
                    }
                    return $sum % 10 === 0;
                }
            ?>
        </div>
    </main>
</body>
</html>