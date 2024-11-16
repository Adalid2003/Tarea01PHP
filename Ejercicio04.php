<?php
// Función para contar la frecuencia de caracteres en una cadena
function frecuenciaCaracteres($cadena) {
    // Inicializamos un array para almacenar la frecuencia
    $frecuencia = [];

    // Recorremos cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Verificamos si el carácter ya está en el array de frecuencia
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    // Devolvemos el array asociativo con la frecuencia de caracteres
    return $frecuencia;
}

// Ejemplo de uso
$cadena = "abracadabra";
echo "Frecuencia de caracteres en la cadena '$cadena': ";
print_r(frecuenciaCaracteres($cadena));
?>
