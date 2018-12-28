<?php

# Consultar http://php.net/manual/es/ref.strings.php

# Un pequeño ejemplo
$string = 'Cadena de texto, que quiero separar, en cada coma, que consiga';
$arreglo = explode(',', $string);
print_r($arreglo); // Alias más limpio de var_dump