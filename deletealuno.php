<?php

include('conexao.php');

$idcurso = 1;


$sql ="delete from tblcurso";


//conexao->query(comando sql)
$connect->query($sql);

var_dump($connect);