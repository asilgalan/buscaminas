<?php
if (isset($_POST['nivel'])) {
    $nivel = $_POST['nivel'];
    echo "Has seleccionado el nivel: " . $nivel;
} else {
    echo "Por favor, selecciona un nivel.";
}
?>