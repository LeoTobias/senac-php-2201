<?php
require 'conexao.php';
require 'controleDeAcesso.php';

$tarefa = $_POST['tarefa']; //Dado inseguro
if($_FILES['figura']['error'] == 0 && $_FILES['figura']['size'] > 0){

    move_uploaded_file($_FILES['figura']['tmp_name'], "imagens/{$_FILES['figura']['name']}");
}

$stmt = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)'); // preparando a consulta

$stmt->bindParam(':tarefa', $tarefa); // Me protege de SQL INJECTION; garante que o que vem do usuário seja gravado como texto normal.

if( $stmt->execute() ){
    echo "$tarefa inserida com sucesso!";
}else{
    echo "Problema na gravação da nova tarefa $tarefa";
}
?>

<br><a href="form.php">Voltar</a>
<br><a href="listarTarefas.php">Ver todas as Tarefas</a>