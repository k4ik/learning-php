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
    </style>
</head>
<body>
    <main>
        <form method="post">
            <label for="value">Enter a value:</label>
            <input type="number" placeholder="4" name="value">

            <select name="" id="">
                <option value="">Select a option</option>
                <option value="addition">+</option>
                <option value="subtraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>

            <label for="value">Enter another value: </label>
            <input type="number" placeholder="2" name="anotherValue">

            <button type="submit">Calculate</button>
        </form>
    </main>
</body>
</html>