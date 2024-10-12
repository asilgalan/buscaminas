
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscaminas</title>
    <link rel="stylesheet" href="estiloFormulario.css">
</head>
<body>

    <form action="juego_buscaminas.php" method="post">
    <h1>Bienvenido al Buscaminas</h1>
        <label for="nivel">Selecciona el nivel de dificultad:</label> 
        <select name="nivel" id="nivel">
            <option value="facil">Fácil</option>
            <option value="dificil">Difícil</option>
        </select>
        <br><br>
        <input type="image" src="Imagenes/Mina.png" name="imagen" width="50px" title="Enviar">
    </form>
</body>
</html>