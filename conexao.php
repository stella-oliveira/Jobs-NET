<?php

    // Conexão local
//    $servidor = "localhost";
//    $usuario = "root";
//    $senha = "";
//    $database = "desafiogama";
//    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Conexão remota
    $servidor = "localhost";
    $usuario = "id17504945_admin";
    $senha = "*M6DtGM3tdL)hmU";
    $database = "id17504945_desafiogama";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        print "Falha na conexão!";
    }

?>