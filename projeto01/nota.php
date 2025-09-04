<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nota</title>
</head>
<body>
    <form action="calculo.php" method="post">
        <label>máteria</label>
        <p><input type="text" name="Materia" required></p>
        <label>Nota:</label>
        <p><input type="text" name="nota" required></p>
        <p><button type="submit">Enviar</button></p>
    </form>
</body>
</html>
