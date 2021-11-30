<?php
// include  -> dá um aviso e continua o programa
// include_once -> apenas uma vez
//require -> mata o programa ao encontrar um erro
// require_once -> apenas uma vez

include ( 'conexao.php');

$aluno  ="Bernardo";
$turma  = "1001";
$mensalidade = 359.99;

$sql   = "insert into tblaluno (aluno,turma,mensalidade) 
values ('$aluno', '$turma', '$mensalidade')";
          
//conexao->query(comando sql)
$connect->query($sql);

