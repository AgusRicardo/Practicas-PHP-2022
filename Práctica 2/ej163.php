<?php 
// Ingresar por medio de un programa HTML el nombre completo de una persona. Determinar
// y exhibir la cantidad de caracteres que lo forman. Tener en cuenta que los espacios en
// blanco no deben contarse.

$nombre = $_GET["nombre"];
$nombreCompleto = [];

for ($i=0; $i < strlen($nombre) ; $i++) {
  if ($nombre[$i] != ' ') {
    $nombreCompleto[$i] = $nombre[$i];
    echo $nombreCompleto[$i];
  }
}
echo "<br>" . "Cantidad de carácteres:". count($nombreCompleto);
