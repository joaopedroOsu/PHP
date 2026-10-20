<?php
//declarar variaveis
$nome = "Moí Tripa";
$idade = 136;
$altura = 2.70;
$situacao = 1==1;
$lista_frutas = [' Coração', ' Pancreas', ' Pulmão'];
$lista_frutas = [' Coração', ' Pancreas', ' Pulmão'];
$linguagem_programacao2 = (object) [
	'nome' => ' Ritual de Baal',
	'tipo' => 'back-end'
];



//exibier os dados
echo "Seu nome é $nome você tem $idade anos, $altura de altura";
echo "<br>";
echo "A segunda fruta da lista é". $lista_frutas [ 2];
echo "<br>";
echo "Sua linhagem de programação principais é". $linguagem_programacao ->nome;
echo "<br>";
echo "As informações são". $situacao;

?>









