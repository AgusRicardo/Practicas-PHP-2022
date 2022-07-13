<?php
// Elaborar un programa en PHP que permita leer un número en radianes e imprima su
// equivalencia en grados; asimismo, que permita leer un número en grados e imprima su
// equivalencia en radianes. Ingresarlo en un solo HTML y que lo resuelva un solo programa
// PHP. Recordar que para convertir de grados a radianes se realiza con la siguiente
// equivalencia: 


$num = $_GET["numero"];

if (!empty($_GET["select"])) {
  $selected = $_GET["select"];
  if ($selected == 'radianes') {
    $grados = $num*(180 / (M_PI));
    echo $num ." radianes, su equivalencia en grados es: ". round($grados,2)."°";

  }else if ($selected == 'grados'){
    $radianes = $num*((M_PI) / 180);
    echo $num."° su equivalencia en radianes es: ". $radianes;
  }
}



