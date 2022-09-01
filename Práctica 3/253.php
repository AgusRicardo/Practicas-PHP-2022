<?php
// Ejercicio 253 - Agustin Ricardo

// 1 m equivale a 1,0936 yardas
// 1 m equivale a 39.3701 pulgadas
// 1 m equivale a 3.28084 pies

function medidas ($medida) {
  for ($i=1; $i < $medida + 1 ; $i++) {
    $yardas = $i* 1.0936;
    $pulgadas = $i*39.3701;
    $pies = $i*3.28084;
    echo "{$i} metros = {$yardas} yardas = {$pulgadas} pulgadas = {$pies} pies <br>"; 
  }
}
echo medidas(10);

?>
