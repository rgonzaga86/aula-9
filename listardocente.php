<?php
include('conexao.php');

$sql = "select * from tbldocente";

$resultado = $connect->query($sql);


    //listar os resultados achados
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
       // var_dump($linha);

        echo $linha['iddocente']."<br>";
        echo $linha['docente']."<br>";
        echo $linha['especialidade']."<br>";
        echo $linha['salariohora']."<br>";
        echo $linha['disponibilidade']."<br>";
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";

         //die();

    }