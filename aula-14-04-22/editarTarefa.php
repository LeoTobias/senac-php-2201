<?php
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']); //Usando expressão regular para tratar o dado evitando SQL Injection;

if(isset($_POST['tarefa'])){ #atualiza o registro

    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){

        echo "Tarefa atualizada com sucesso!";
    }else{
        echo "Erro ao atualizar a tarefa";
    }
}# FIM ATUALIZA REGISTRO

$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id = $id"); // ->query Serve para o select
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

echo "  <form method='post'>
            <label for='tarefa'>Tarefa</label>
            <input type='text' id='tarefa' name='tarefa' 
                value=';{$tarefa['descricao']}'><br>
            <input type='hidden' name='id' value='$id'><br>
            <input type='submit' value='Atualizar'>
        </form> <a href='select.php'>Voltar</a>";