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

        p {
            margin-top: 20px;
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
        <p>Average:</p>
    </main>
</body>
</html>