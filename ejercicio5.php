<?php

//Ejercicio 5: Escribe una función que tome un arreglo de números enteros como parámetro y devuelva la suma de todos los elementos.
//Complejidad: MEDIA (2 puntos)

//🔍 Hint: Puedes usar un bucle para iterar sobre el arreglo y sumar los elementos.

function suma($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}