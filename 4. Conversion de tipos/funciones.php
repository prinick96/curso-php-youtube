<?php

$string = '150';

$entero = intval($string);
var_dump($entero);
echo '<br />';

$flotante = floatval($string);
var_dump($flotante);
echo '<br />';

$hexadecimal = intval('0xF', 16);
var_dump($hexadecimal);
echo '<br />';

$octal = intval('42', 8);
var_dump($octal);
echo '<br />';

# NOTA:
    # El parámetro 2 no tiene ningún efecto 
    # a menos que el parámetro 1 sea una cadena. 