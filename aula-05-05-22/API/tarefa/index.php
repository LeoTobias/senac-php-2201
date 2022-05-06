<?php

require_once '../../../aula-28-04-22/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){ // Se o requisitante usar o método GET 

    $stmt = $bd->query("SELECT id, descricao, imagem FROM tarefas WHERE apagado = 0");
    $stmt->execute();

    $saida = [];

    while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        $saida[] = $registro;
    }

    http_response_code(200);
    
    echo json_encode($saida);
    exit();
}
// Retorna código de erro  método não permitido
http_response_code(405);