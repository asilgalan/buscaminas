<?php

$valor = $_POST['valor'];

if ($valor == "*") {
   
    echo "Has tocado una mina";
}

if($valor=="0"){
    echo "<td> <input type='hidden'>  <td> </input>  ";
}
?>