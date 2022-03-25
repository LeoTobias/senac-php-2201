<?php

// Conecta no banco de dados
$dsn = "mysql:dbname=aula_php;host=localhost";
$dbuser = 'root';
$dbpass = '';

$pdo = new PDO ($dsn, $dbuser, $dbpass);
//FIM Conecta no Banco de Dados

//INSERT

$inseriu = $pdo->exec(' INSERT INTO 
                    tarefas (descricao)
                VALUES  
                    ("MAIS UMA TAREFA INSERIDA VIA PHP")');

//FIM INSERT

if($inseriu){
    echo "INSERIU!";
}else{
    echo "Ai meu Deus, não inseriu!";
}


//DELETE

$apagou = $pdo->exec(' DELETE FROM 
                    tarefas 
                WHERE 
                    id = 18');

//FIM DELETE

if($apagou){
    echo "APAGOU!";
}else{
    echo "Ai meu Deus, não apagou!";
}