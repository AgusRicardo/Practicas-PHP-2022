<?php
// Generar e informar los primeros N múltiplos de un número 
// M entero cualquiera. N y M son
// números que se ingresan como dato, en un programa HTML.
$n = $_GET["n"];
$m = $_GET["m"];

$nums = [];

if ($m > 0) {
  for ($i=1; $i <= $n ; $i++) { 
    $nums[$i] = $m * $i;
    echo $nums[$i] ."<br>";
  }
}else {
  echo "Debe ingresar un número entero";
}