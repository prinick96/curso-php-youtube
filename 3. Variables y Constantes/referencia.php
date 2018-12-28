<?php

$original = 10;
$otra = $original;
echo '$otra: ', $otra, '<br />';


$original = 10;
$referencia = &$original;
# $referencia &= $original; // Es otra sintáxis válida

# Modificamos la original, porque modificamos la referencia
$referencia = 20;

echo '$original: ', $original, '<br />';
# ¿Qué pasó con $otra?
echo '$otra: ', $otra, '<br />';