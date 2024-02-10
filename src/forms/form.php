<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form method="post">
        <label for="name">Nome:</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>

        <button>Enviar</button>
    </form>
    <?php 
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "$name<br>$email";
    ?>
</body>
</html>