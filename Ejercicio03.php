<?php
// Función para determinar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Eliminamos espacios y convertimos todo a minúsculas para normalizar la comparación
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // Comparamos la cadena original con su versión invertida
    return $cadena === strrev($cadena);
}

// Ejemplo de uso
$texto = "Anita lava la tina";
echo "La frase '$texto' " . (esPalindromo($texto) ? "es un palíndromo" : "no es un palíndromo") . ".";
?>
