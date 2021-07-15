<?php

$nome = $_POST["nome"];
$nome = filter_input(input_post, 'nome');
$idade = filter_input(input_post, 'idade');
$educacao = filter_input(input_post, 'educacao');
$profissao = filter_input(input_post, 'profissao');
$competencia = filter_input(input_post, 'competencia');
$opiniao = filter_input(input_post, 'opiniao');


echo("Nome: $nome </br>");
echo("Idade: $idade </br>");
echo("Educação: $educacao </br>");
echo("Profissão: $profissao </br>");
echo("Competência: $competencia </br>");

echo ("Média geral: $media");









?>