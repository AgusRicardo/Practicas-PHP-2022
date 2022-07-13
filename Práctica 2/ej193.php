<?php
//Ingresar por medio de un HTML un valor entero N (< 25). A continuación generar un
//conjunto VEC de N componentes (aleatoriamente con valores entre -100 y 100). Si la suma
//de las componentes resulta mayor que cero imprimir las de índice par, sino las de índice
//impar.
$n = $_GET["n"];
$vec = [];

$aux = 0;
if (($n < 25) && ($n > 0)) {
  for ($i=0; $i < $n ; $i++) { 
    $vec[$i] = rand(-100, 100);
    $aux += $vec[$i];
  }
  echo 'Array:';
  for ($i=0; $i < $n ; $i++) {
    if ($aux > 0) {
      if ($vec[$i] % 2 == 0) {
        echo $vec[$i]. ",";
      }
    }else {
      if ($vec[$i] % 2 != 0) {
        echo $vec[$i]. ",";
      }
    }
  }
  echo "<br> Total:" . $aux;
}else {
  echo 'Debe ser menor a 25 y mayor a 0';
}
