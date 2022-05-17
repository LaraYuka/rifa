<?php
    
    //Obter a nossa conexão com o banco de dados para
    include('../../conexao/conn.php');

    //Obter os dados enviados do formulario via $_REQUEST
    $requestData = $_REQUEST;

    //Verificação de campo obrigatorios do formulario
    if(empty($requestData['NOME'])){
        //Caso a variavel venha vazia eu gero um retorno de erro do mesmo
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) obrigatorio(s) não preenchido(s).'
        );
    }else{
        //Caso não exista campo em vazio, vamos a requisição
        $ID = isser($requestData['ID']) ? $requestData['ID'] : '';
        $opracao = isser($requestData['operacao']) ? $requestData['operacao'] : '';

        //Verifica se e para cadastrar um novo registro
        if($operacao == 'insert'){
            //Prepara o comando INSERT para ser executado
            try{
                $stmt = $pdo->prepare('INSERT INTO TIPO (NOME) VALUES (:a');
                $stmt->execute(array(
                    ':a' => utf8_decode($requestData['NOME'])
                ));
                $dados = array(
                    "tipo" => 'error',
                    "mensagem" => 'Não foi possivel efetuar o cadastro do curso.'
                );
            }
        }else{
            //Se minha variavel operação estiver vazia enttão devo gerar os scripts de update
            try{
                $stm = $pdo->prepare('UPDATE TIPO SET NOME = :a WHERE ID = :id');
                $stm->execute(array(
                    ':id' => $ID,
                    ':a' => utf8_decode($requestData['NOME'])
                ));
                $dados = array(
                    "tipo" => 'success',
                    "mensagem" => 'Registro atualizado com sucesso'
                );
            } catch(PDOException $e){
                $dados = array(
                    "tipo" => 'error',
                    "mensagem" => 'Não foi possivel efetuar a alteração do registro'
                );
            }
        }
    }

    //Converter um array ded dados para a representação JSON
    echo json_encode($dados);