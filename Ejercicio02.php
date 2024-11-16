<?php
// Función para determinar si un número es primo
function esPrimo($numero) {
    // Caso especial: 0 y 1 no son números primos
    if ($numero <= 1) return false;

    // Verificamos si tiene divisores distintos de 1 y sí mismo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si encontramos un divisor, no es primo
        }
    }

    return true; // Si no tiene divisores, es primo
}

// Ejemplo de uso
$numero = 29;
echo "El número $numero " . (esPrimo($numero) ? "es primo" : "no es primo") . ".";
?>
