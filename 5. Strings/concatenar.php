<?php

echo 'Esto no es' , ' concatenar!', '<br />';
echo 'Esto ' . 'sí' . ' lo es <br />';
# Concatenar tiene efectos en el rendimiento!

$otra = 'variables';
$variable = 'En todos lados se puede concatenar ' . $otra;
echo $variable;