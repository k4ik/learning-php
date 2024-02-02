<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Validator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            background-color: #d7d7d7;
            padding: 10px;
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
            margin: 5px 0;
        }

        input, button {
            border: 1px solid #c0c0c0;
            padding: 5px;
        }
    </style>
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
            ?>
        </div>
    </main>
</body>
</html>