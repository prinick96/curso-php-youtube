<?php

const MI_CONSTANTE = 'Puede contener cualquier tipo.';
echo MI_CONSTANTE, '<br />';

define('MI_CONSTANTE_2', 'Esta era una forma antigua de declarar una constante.');
echo MI_CONSTANTE_2;

# Habrá un warning en la línea 9, porque el orden es importante
echo ARREGLO;
const ARREGLO = [1,2,3,4,5];

# Habrá un warning en la línea 14, porque las constantes no varían
const ARREGLO = 'Otro valor';