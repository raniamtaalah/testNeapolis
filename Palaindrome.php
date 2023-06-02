<?php
function isPalindrome($str) {
    // Convertir la chaîne en minuscules et supprimer les espaces
    $str = strtolower(str_replace(' ', '', $str));
    
    // Inverser la chaîne
    $reversedStr = strrev($str);
    
    // Vérifier si la chaîne est égale à sa version inversée
    return $str === $reversedStr;
}

// Exemple d'utilisation
$inputString = "madam";
if (isPalindrome($inputString)) {
    echo "La chaîne est un palindrome.";
} else {
    echo "La chaîne n'est pas un palindrome.";
}
 
