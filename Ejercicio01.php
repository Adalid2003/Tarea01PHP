<?php
// Función para generar la serie Fibonacci
function generarFibonacci($n) {
    // Inicializamos la serie con los dos primeros números
    $serie = [0, 1];

    // Generamos la serie hasta el término n
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos anteriores
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }

    // Devolvemos la serie generada
    return array_slice($serie, 0, $n);
}

// Ejemplo de uso
$n = 10;
echo "Serie Fibonacci de los primeros $n términos: ";
print_r(generarFibonacci($n));
?>
