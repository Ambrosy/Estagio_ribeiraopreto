<?php
//Resposta da questão 2
// Função que calcula a sequência de Fibonacci até o valor máximo informado
function fibonacci($max) {
  $fibonacci = array(0, 1);
  while ($fibonacci[count($fibonacci) - 1] < $max) {
    $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
  }
  return $fibonacci;
}

// Número a ser verificado
$num = 13;

// Calcula a sequência de Fibonacci até o número informado
$fibonacci = fibonacci($num);

// Verifica se o número informado pertence à sequência
if (in_array($num, $fibonacci)) {
  echo "$num pertence à sequência de Fibonacci.";
} else {
  echo "$num não pertence à sequência de Fibonacci.";
}
?>
