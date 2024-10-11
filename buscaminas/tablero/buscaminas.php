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


//llenamos de 1 y dos
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
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
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
for ($i = 0; $i < 16; $i++) {
    for ($j = 0; $j < 16; $j++) {

        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
}
?>


