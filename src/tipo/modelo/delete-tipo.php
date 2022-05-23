<?php

    //Instancia do banco de dados 
    include("../../conexao/conn.php");

    //Coleta do ID que será excluido do nosso banco de dados que está sendo enviado pelo FROM
    $ID = $_REQUEST['ID'];

    //Criar a nossa querie para interação com o BD
    $sql = "DELETE * FROM TIPO WHERE ID = $ID";

    //Executar a nossa querie 
    $resultado = $pdo->query($sql);

    //Testaremos o retorno do resultado da nossa querie 
    if($resultado){
        $dados = array(
            'tipo' => 'success',
            'mensagem' => 'Registro excluido com sucesso!'
        );
    }else{
        $dados = array(
            'tipo' => 'error',
            'mensagem' => 'Não foi possivel excluir o registro'
        );
    }

    echo json_encode($dados);