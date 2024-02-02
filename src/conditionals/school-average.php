<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstNote = (float) $_POST["firstNote"];
        $secondNote = (float)$_POST["secondNote"];
        $thirdNote = (float) $_POST["thirdNote"];

        $average = number_format(getAverage($firstNote, $secondNote, $thirdNote),1, ".", " ");
        $stats = getStats($average);
    }

    function getAverage($firstNote, $secondNote, $thirdNote) {
        $average = ($firstNote + $secondNote + $thirdNote) / (float)3;
        return $average;
    }

    function getStats($average) {
        $stats = "";

        if($average >= 0 && $average < 6.0) {
            $stats = "DISAPPROVED";
        } elseif($average == 6.0) {
            $stats = "RECOVERY";
        } elseif($average > 6.0 && $average <= 10.0) {
            $stats = "APPROVED";
        } else {
            $stats = "Invalid Status";
        }

        return $stats;
    }
?>

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
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        fieldset {
            display: flex;
            flex-direction: column;
            border: none;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 15px;
        }

        button {
            margin-bottom: 10px;
        }

        p {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <main>
        <form method="post">
            <fieldset>
                <label for="firstNote">1st note:</label>
                <input type="text" placeholder="8.0" name="firstNote">
            </fieldset>
            <fieldset>
                <label for="secondNote">2nd note:</label>
                <input type="text" placeholder="4.2" name="secondNote">
            </fieldset>
            <fieldset>
                <label for="thirdNote">3rd note:</label>
                <input type="text" placeholder="6.6" name="thirdNote">
            </fieldset>
            <button type="submit">Calculate</button>
        </form>
        <p>Average: <?php echo $average;?></p>
        <p>Stats: <?php echo $stats;?></p>
    </main>
</body>
</html>