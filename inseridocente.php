<?php
include('conexao.php');

$docente              = "Bernardo";
$especialidade        = "Analista de Sistemas";
$salariohora          = " 350";
$disponibilidade      = "3ª-5ª e Sab das 08:00 as 12:00 horas";

$sql    = "insert into tbldocente (docente, especialidade, salariohora, disponibilidade)
 values ('$docente', '$especialidade', '$salariohora', '$disponibilidade')";

//conexao->query(comando sql)
$connect->query($sql);