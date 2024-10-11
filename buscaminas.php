<?php
if (isset($_POST['nivel'])) {
    $nivel = $_POST['nivel'];
    
    echo "Has seleccionado el nivel: " . $nivel;
} else {
    echo "Por favor, selecciona un nivel.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscaminas</title>
</head>
<body>
    <h1>Bienvenido al Buscaminas</h1>
    <form action="juego_buscaminas.php" method="post">
        <label for="nivel">Selecciona el nivel de dificultad:</label>
        <select name="nivel" id="nivel">
            <option value="facil">Fácil</option>
            <option value="dificil">Difícil</option>
        </select>
        <br><br>
        <input type="submit" value="Jugar">
    </form>
</body>
</html>
