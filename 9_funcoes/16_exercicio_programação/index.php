<?php
function countVowels($str = "World") {
    // Inicializa o contador de vogais
    $vowelCount = 0;
    // Define as vogais
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    // Percorre cada caractere da string
    for ($i = 0; $i < strlen($str); $i++) {
        // Verifica se o caractere atual é uma vogal
        if (in_array($str[$i], $vowels)) {
            // Incrementa o contador de vogais
            $vowelCount++;
        }
    }
    
    // Retorna o contador de vogais
    return $vowelCount;
}

// Exemplo de uso
$exampleString = "Hello World!";
echo countVowels($exampleString); // Output: 3
