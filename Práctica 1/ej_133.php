<?php
// Se ingresan 6 números positivos diferentes por medio de un programa HTML. Llamar a un
// programa php donde muestre un cartel que diga: “El mayor número ingresado fue el xxx”. 

$n_1 = $_GET["nro_1"];
$n_2 = $_GET["nro_2"];
$n_3 = $_GET["nro_3"];
$n_4 = $_GET["nro_4"];
$n_5 = $_GET["nro_5"];
$n_6 = $_GET["nro_6"];
$nums = [$n_1,$n_2,$n_3,$n_4,$n_5,$n_6];

echo "Números ingresados: ";
for ($i=0; $i < count($nums) ; $i++) { 
  echo $nums[$i].",";
}
if (($n_1 && $n_2 && $n_3 && $n_4 && $n_5 && $n_6) > 0) {
  if (($n_1 !== $n_2 && $n_1 !== $n_3 && $n_1 !== $n_4 && $n_1 !== $n_5 && $n_1 !== $n_6) && ($n_2 !== $n_1 && $n_2 !== $n_3 && $n_2 !== $n_4 && $n_2 !== $n_5 && $n_2 !== $n_6) && ($n_3 !== $n_1 && $n_3 !== $n_2 && $n_3 !== $n_4 && $n_3 !== $n_5 && $n_3 !== $n_6) && ($n_4 !== $n_1 && $n_4 !== $n_2 && $n_4 !== $n_3 && $n_4 !== $n_5 && $n_4 !== $n_6) && ($n_5 !== $n_1 && $n_5 !== $n_2 && $n_5 !== $n_3 && $n_5 !== $n_4 && $n_5 !== $n_6) && ($n_6 !== $n_1 && $n_6 !== $n_2 && $n_6 !== $n_3 && $n_6 !== $n_4 && $n_6 !== $n_5)) {
    echo "<br>"."El mayor número ingresado fue:". max($nums). "<br>";
  } else {
    echo "<br>"."No puede haber números iguales";
  }
}else {
  echo "<br>"."Los 6 números deben ser mayores a 0";
}
?>