<?php
// En un negocio, cada operación de venta tiene asignada un dato numérico que representa el
// plan de pago convenido con el cliente de acuerdo con el siguiente código:
// a. 3: total en efectivo.
// b. 2: mitad en efectivo, mitad a 30 días.
// c. 1: un tercio en efectivo, un tercio a 30 días y un tercio a 60 días.
// Dada una venta específica, a partir del importe y del dato del plan de pago (por medio de un
// programa HTML), calcular e informar el monto a cobrar en efectivo. 

$importe = $_GET['importe'];
$plan = $_GET['plan'];

if ($plan <= 3 && $plan >= 1) {
  switch ($plan) {
    case 1:
      echo "Se le debe cobrar $".round(($importe / 3)*1, 2) ." en efectivo, $".round(($importe / 3)*1, 2) ." a 30 dias y $".round(($importe / 3)*1, 2) ." a 60 dias";
      break;
    case 2:
      echo "Se le debe cobrar $". $importe / 2 ." en efectivo y a 30 dias otros $". $importe / 2;
      break;
    case 3:
      echo "Se le debe cobrar en efectivo: $". $importe;
      break;
    default:
      break;
  }
}else {
  echo 'Debe ingresar un plan entre 1 y 3';
}

