<?php 

require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']); //Usando expressão regular para tratar o dado evitando SQL Injection;

if($bd->exec("UPDATE tarefas SET apagado = 1 WHERE id = $id")){

    echo "Tarefa apagada com sucesso!";

}else{
    echo "Erro ao tentar apagar a tarefa" ;
}

echo "<br><br><a href='listarTarefa.php'>Voltar</a>";