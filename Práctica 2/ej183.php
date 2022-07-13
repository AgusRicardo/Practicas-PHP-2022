<?php
// Ingresar números enteros en un arreglo bidimensional A de 10 filas por 5 columnas; luego
//ingresar números enteros en otro arreglo B de igual dimensión. Ambos hacerlo
//aleatoriamente. Obtener un arreglo C, siendo C = A + B. (cada elemento de C se obtiene
//como la suma de los elementos homólogos de A y B).
//a) Mostrar A, B y C, un arreglo debajo del otro
//b) Mostrar A, B y C, un arreglo al lado del otro 

$a = [];
$b = [];
$c = [];

for ($i=0; $i < 10 ; $i++) { 
  for ($j=0; $j < 5 ; $j++) { 
    $a[$i][$j] = rand(1, 100);
    $b[$i][$j] = rand(1, 100);
    $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
  }
}
// Parte a)
echo "<b>A</b>:";
for ($i=0; $i < 10 ; $i++) { 
  for ($k=0; $k < 5; $k++) { 
    echo ','.$a[$i][$k];
  }
}
echo "<br>";
echo "<b>B</b>:";
for ($i=0; $i < 10 ; $i++) { 
  for ($k=0; $k < 5; $k++) { 
    echo ','.$b[$i][$k];
  }
}
echo "<br>";
echo "<b>C</b>:";
for ($i=0; $i < 10 ; $i++) { 
  for ($k=0; $k < 5; $k++) { 
    echo ','.$c[$i][$k];
  }
}
echo "<br>";
echo "<br>";

// Parte b)
for ($p=0; $p < count($a) ; $p++) { 
  for ($i=0; $i < 5; $i++) { 
    echo " <b>A:</b> " . $a[$p][$i]; 
    echo " <b>B:</b> " . $b[$p][$i]; 
    echo " <b>C:</b> " . $c[$p][$i] . "<br>"; 
  }
}
