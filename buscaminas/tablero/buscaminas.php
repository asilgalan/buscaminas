<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     table {
            border-collapse: collapse;
            margin: 100px auto;
        }
        td {
            width: 40px;
            height: 40px;
            border: 2px solid #000;
        }
        input{
            width: 100%;
            height: 100%;
            background-color: #ccc;
            border: none;
        }
        button:hover {
            background-color: #ddd;
        }
    </style>
</style>
<body>
    
</body>
</html>
<?php

$opcion=$_POST['nivel'];
switch ($opcion) {
    case 1:
       facil();
        break;
    
    case 2:
       dificil();
        break;
}

function facil(){
$minas = 5;
$mina = "*";


//rellenar el array con 0
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

        $matriz[$i][$j] = "0";
    }
}


// meter las minas
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {


        //mientras minas es mayor que 0 sigo el bucle
        while ($minas > 0) {
            $i = rand(0, 9);
            $j = rand(0, 9);

            //comprubo si mina es igual a 0  y si es igual a 0 meto una mina si no busco otra posicion hasta que sea igual a 0

            if ($matriz[$i][$j] == "0") {
                $matriz[$i][$j] = $mina;
                $minas--;
            }
        
        }
   


    
    }
}


//llenamos de 1 y dos y.....
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

    // comprueba que la posicion en la que se encuentra no sea una mina
    if ($matriz[$i][$j] != $mina) {
        $contador = 0; 

       //arriba a la derecha
        if ($i > 0 && $j < 9 && $matriz[$i - 1][$j + 1] == $mina) {
            $contador++;
        }

        // Arriba
        if ($i > 0 && $matriz[$i - 1][$j] == $mina) {
            $contador++;
        }
        // Arriba a la izquierda
        if ($i > 0 && $j > 0 && $matriz[$i - 1][$j - 1] == $mina) {
            $contador++;
        }
        // abajo a la izquierda
        if ($i < 9 && $j > 0 && $matriz[$i + 1][$j - 1] == $mina) {
            $contador++;
        }

        // Abajo
        if ($i < 9 && $matriz[$i + 1][$j] == $mina) {
            $contador++;
        }

        // Abajo a la derecha
        if ($i < 9 && $j < 9 && $matriz[$i + 1][$j + 1] == $mina) {
            $contador++;
        }

      

        // Izquierda
        if ($j > 0 && $matriz[$i][$j - 1] == $mina) {
            $contador++;
        }

        // Derecha
        if ($j < 9 && $matriz[$i][$j + 1] == $mina) {
            $contador++;
        }

   
        $matriz[$i][$j] = $contador;
    }
               
            }
            
        }

//imprimo

echo "<table>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
       echo " <form action='comprobar.php' method='Post'>";

        if($matriz[$i][$j] == 0){
            
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input type='submit' name='ceros' value=''> </input></td> ";
        }else if($matriz[$i][$j] ==$mina){
        
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input value='' name='minas' type='submit'></input> </td>";
        }else{
            
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input  value='' name='numeros' type='submit'> </input></td>";
        }
      echo "</form>";
       
    }
    echo "</tr>";
}
echo "</table>";
}









function dificil(){
    $minas = 8;
    $mina = "*";


//rellenar el array con 0
for ($i = 0; $i < 16; $i++) {
    for ($j = 0; $j < 16; $j++) {

        $matriz[$i][$j] = "0";
    }
}


// meter las minas
for ($i = 0; $i < 16; $i++) {
    for ($j = 0; $j < 16; $j++) {


        //mientras minas es mayor que 0 sigo el bucle
        while ($minas > 0) {
            $i = rand(0, 15);
            $j = rand(0, 15);

            //comprubo si mina es igual a 0  y si es igual a 0 meto una mina si no busco otra posicion hasta que sea igual a 0

            if ($matriz[$i][$j] == "0") {
                $matriz[$i][$j] = $mina;
                


                $minas--;
            }
        
        }
   


    
    }
}


//llenamos de 1 y dos
for ($i = 0; $i < 16; $i++) {
    for ($j = 0; $j < 16; $j++) {

    // comprueba que la posicion en la que se encuentra no se una mina
    if ($matriz[$i][$j] != $mina) {
        $contador = 0; 

       
       //arriba a la derecha
        if ($i > 0 && $j < 15 && $matriz[$i - 1][$j + 1] == $mina) {
            $contador++;
        }

        // Arriba
        if ($i > 0 && $matriz[$i - 1][$j] == $mina) {
            $contador++;
        }
  // Arriba a la izquierda
        if ($i > 0 && $j > 0 && $matriz[$i - 1][$j - 1] == $mina) {
            $contador++;
        }
        // abajo a la izquierda
        if ($i < 15 && $j > 0 && $matriz[$i + 1][$j - 1] == $mina) {
            $contador++;
        }

        // Abajo
        if ($i < 15 && $matriz[$i + 1][$j] == $mina) {
            $contador++;
        }

        // Abajo a la derecha
        if ($i < 15 && $j < 15 && $matriz[$i + 1][$j + 1] == $mina) {
            $contador++;
        }

      

        // Izquierda
        if ($j > 0 && $matriz[$i][$j - 1] == $mina) {
            $contador++;
        }

        // Derecha
        if ($j < 15 && $matriz[$i][$j + 1] == $mina) {
            $contador++;
        }

        // Asigna el contador de minas adyacentes a la posición actual
        $matriz[$i][$j] = $contador;
    }
               
            }
            
        }
    





//imprimo
echo "<table>";
for ($i = 0; $i < 16; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 16; $j++) {
       echo " <form action='comprobar.php' method='Post'>";

        if($matriz[$i][$j] == 0){
            
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input type='submit' name='ceros' value=''> </input></td> ";
        }else if($matriz[$i][$j] ==$mina){
        
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input value='' name='minas' type='submit'></input> </td>";
        }else{
            
            echo "<input type='hidden' name='valor' value='" . $matriz[$i][$j] . "'>";
            echo "<td> <input  value='' name='numeros' type='submit'>  </input></td>";
        }
      echo "</form>";
       
    }
    echo "</tr>";
}
echo "</table>";
}


?>


