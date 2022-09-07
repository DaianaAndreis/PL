<html>
  <head>
    <title>Calculadora PHP</title>
  </head>
  <body>
 
<?php

function suma(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 + $valor2;
  print_r($resultado);
  echo '<p>';
}
suma();

function resta(){
  $valor1 = 12;
  $valor2 = 7;
  $resultado = $valor1 - $valor2;
  print_r($resultado);
  echo '<p>';
}
resta();

function multiplicacion(){
  $valor1 = 8;
  $valor2 = 9;
  $resultado = $valor1 * $valor2;
  print_r($resultado);
  echo '<p>';
}
multiplicacion();

function division(){
  $valor1 = 120;
  $valor2 = 12;
  $resultado = $valor1 / $valor2;
  print_r($resultado);
}
division();
?>


  </body>
</html>