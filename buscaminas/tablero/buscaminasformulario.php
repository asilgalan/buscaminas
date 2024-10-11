

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscaminas</title>
</head>
<body>

    <h1>Bienvenido al Buscaminas</h1>
    <form action="buscaminas.php" method="post">
        <label for="nivel">Selecciona el nivel de dificultad:</label>
        <select name="nivel" id="nivel">
            <option value="1">Fácil</option>
            <option value="2">Difícil</option>
        </select>
        <br><br>
        <input type="submit" value="Jugar">
    </form>
    <?php

?>


</body>
</html>
</html>