<?php

$entero = 1;
var_dump($entero);
echo '<br />';

$flotante = 1.0; // 51/50
var_dump($flotante);
echo '<br />';

$hexadecimal = 0xF;
var_dump($hexadecimal);
echo '<br />';

$booleano = true; // false
var_dump($booleano);
echo '<br />';

$nulo = null; 
var_dump($nulo);
echo '<br />';

$string = 'Contenido "infinito"';
var_dump($string);
echo '<br />';

$string_alt = "¿Qué diferencia hay entre comillas dobles y simples?";
echo $string_alt, '<br />';

$string_alt_2 = "Que en las dobles, php interpreta ($entero) las variables.";
echo $string_alt_2, '<br />';

$string_alt_3 = 'Y con simples, ($entero) no lo hace';
echo $string_alt_3;
echo '<br />', '<br />', '<br />';
# Además! Hay una diferencia en el rendimiento.

# El orden es importante
echo $error;
$error = 'Seguramente la línea 31 de este archivo dió un warning!';