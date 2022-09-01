<?php
// Ejercicio 203 - Agustín Ricardo
$matriz = [
  [1,0,0],
  [0,1,0],
  [0,0,1],
];


function determinar ($matriz) {
  $mayores = false;
  $contador = 1;
  $aux2 = 0;
  foreach ($matriz as $key => $numero) {
    foreach ($numero as $key => $value) {
      if ($value == 1) {
        $aux = $key;
        if (($aux2 + 1 == $key) || ($aux2 - 1 == $key) ) {
          $contador += 1;
        }
        $aux2 = $aux;
      }else if ($value > 1) {
        $mayores = true;
      }
    }
  }
  if (($contador == count($matriz)) && $mayores == false) {
    return "La matríz es de tipo unidad.";
  }else if ($mayores == true) {
    return "La matríz NO es de tipo unidad porque en sus filas contiene numeros mayores a 0 y 1.";
  }else {
    return "La matríz NO es de tipo unidad.";
  }
}

echo determinar($matriz);

?>