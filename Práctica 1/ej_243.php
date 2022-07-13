<?php
// Elaborar un programa que permita hacer conversiones de temperaturas entre grados
// Fahrenheit, Celsius, Kelvin y Rankine. Primero debe preguntar qué tipo de grados quiere
// convertir. Por ejemplo, si se le indica que desea convertir una temperatura en grados
// Fahrenheit, debe leer la cantidad de grados, y luego calcular e imprimir su equivalente en
// grados Celsius, Kelvin y Rankine, y así, debe hacer lo mismo para cada uno de los otros
// tipos. Para convertir en Celsius, la temperatura Fahrenheit se le resta 32 y se multiplica por
// 5/9. Para convertir en Kelvin a los grados Celsius, se le suma 273. Para convertir en
// Rankine a los grados Farenheit se le suma 460.

$grados = $_GET["grados"];

// $fahrenheit = ($celcius * 9/5) + 32;
// $celcius = ($fahrenheit - 32) * 5/9;
// $kelvin = ($celcius + 273);
// $rakine = ($fahrenheit + 460);


if (!empty($_GET["select"])) {
  $selected = $_GET["select"];
  echo "Seleccionó ". $grados."° ".$selected ."<br>";
  if ($selected == 'Fahrenheit') {
    $celcius = ($grados - 32) * 5/9;
    $kelvin = ($celcius + 273);
    $rakine = ($grados + 460);
    echo $grados. "° Fahrenheit a Celcius es: ". round($celcius) ."°"."<br>";
    echo $grados. "° Fahrenheit a Kelvin es: ". round($kelvin) ."°"."<br>";
    echo $grados. "° Fahrenheit a Rakine es: ". round($rakine) ."°"."<br>";
  } else if ($selected == 'Celsius') {
    $fahrenheit = ($grados * 9/5) + 32;
    $kelvin = ($grados + 273);
    $rakine = ($fahrenheit + 460);
    echo $grados. "° Celsius a Fahrenheit es: ". round($fahrenheit)."°"."<br>";
    echo $grados. "° Celsius a Kelvin es: ". round($kelvin)."°" ."<br>";
    echo $grados. "° Celsius a Rakine es: ". round($rakine)."°" ."<br>";
  } else if ($selected == 'Kelvin') {
    $celcius = ($grados - 273);
    $fahrenheit = ($celcius * 9/5) + 32;
    $rakine = ($fahrenheit + 460);
    echo $grados. "° Kelvin a Celcius es: ". round($celcius)."°" ."<br>";
    echo $grados. "° Kelvin a Fahrenheit es: ". round($fahrenheit)."°" ."<br>";
    echo $grados. "° Kelvin a Rakine es: ". round($rakine)."°" ."<br>";
  } else if ($selected == 'Rankine') {
    $celcius = ($grados - 491.67) * 5/9;
    $fahrenheit = ($celcius * 9/5) + 32;
    $kelvin = ($celcius + 273);
    echo $grados. "° Rankine a Celcius es: ". round($celcius)."°" ."<br>";
    echo $grados. "° Rankine a Fahrenheit es: ". round($fahrenheit)."°" ."<br>";
    echo $grados. "° Rankine a Kelvin es: ". round($kelvin)."°" ."<br>";
  }
}

