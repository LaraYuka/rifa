<?php

    //Variaveis para realização da conexão com o banco de dados
    $hostname = "sql102.epizy.com";
    $database = "epiz_31454906_BD_RIFA";
    $username = "epiz_31454906";
    $password = "LrJmupbM3lTgBD";

    /*
    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
        //echo 'Conectado ao banco de dados ' . $database . '......';
    }else{
        echo 'Erro: ' . mysqli_connect_error();
    } */

    try{
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conexão com o BD '.$database.', foi realizada com sucesso';
    } catch (PDOException $e){
        echo 'Erro: '.$e->getMessage();
    }