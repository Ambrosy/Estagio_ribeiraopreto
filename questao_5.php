<?php
//Resposta da questão 5, programa que inverte os caracteres das strings

$str = "exemplo"; // string original
$newStr = ""; // nova string, vazia no início

// percorre a string original de trás para frente
for ($i = strlen($str) - 1; $i >= 0; $i--) {
  $newStr .= $str[$i]; // adiciona o caractere atual na nova string
}

echo $newStr; // imprime a nova string invertida: "olpmexe"

?>
