<?php
//Resposta da questão 5, programa que inverte os caracteres das strings

  $string = "Olá mundo!"; // Define a string a ser invertida
  $invertedString = ""; // Define uma variável vazia para armazenar a string invertida
  for ($i = strlen($string) - 1; $i >= 0; $i--) { // Percorre cada caractere da string de trás para frente
    $invertedString .= $string[$i]; // Adiciona o caractere atual no início da string invertida
  }
  echo $invertedString; // Imprime a string invertida
?>
