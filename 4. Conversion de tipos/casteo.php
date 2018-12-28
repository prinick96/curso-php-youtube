<?php

# Con un número
echo '<h1>$original = 10</h1>';
$original = 10;
var_dump($original);
echo '<br />';

$casteada = (float) $original;
var_dump($casteada);
echo '<br />';

$casteada_string = (string) $original;
var_dump($casteada_string);
echo '<br />';

$casteada_bool = (bool) $original;
var_dump($casteada_bool);
echo '<br />', '<br />';


# Con un string
echo '<h1>$original = "Ok"</h1>';
$original = 'Ok';
var_dump($original);
echo '<br />';

$casteada = (float) $original;
var_dump($casteada);
echo '<br />';

$casteada_int = (int) $original;
var_dump($casteada_int);
echo '<br />';

$casteada_bool = (bool) $original;
var_dump($casteada_bool);
echo '<br />', '<br />';

# Otros casteos
// (object)
// (array)
// (CLASE cuando comparten interfaz)