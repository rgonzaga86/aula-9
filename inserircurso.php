<?php
include('conexao.php');

$cursos         = "Java";
$valor          = "1500";
$ch   = "360";
$docente        = "Bernardo";

$sql    = "insert into tblcursos (cursos, valor, ch, docente)
 values ('$cursos', '$valor', '$ch', '$docente')";

//conexao->query(comando sql)
$connect->query($sql);
