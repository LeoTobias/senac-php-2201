<?php
/**
 * $consula->execute(); executa a consulta
 * $registro = $consulta->fetch(PDO::FETCH_ASSOC); Retorna em vetor, 
 * onde os indices são as colunas - recupera um único registro

*foreach ($consulta as $linha){
*   echo "ID = ".$linha['id']." Tarefa: ".$linha['descricao']."<br> \n";
*}
*/

require 'conexao.php';

$consulta = $bd->query("SELECT id, descricao FROM tarefas")->fetchAll();

?>

<style>
    .table {
        width: 150px; 
        border: solid 2px #ddd; 
        border-collapse: collapse; 
        background-color: #c6c6c6;
        text-align: center;
    }
    td{
        padding: 15px;
        border: solid 2px #000;

    }
    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        background-color: #4254c8;
    }
</style>
<a href="editarTarefa.php">+ Nova Tarefa</a><br>
<form method="post">
    <table class="table">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
        <?php foreach($consulta as $linha):?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><button name="id" formaction="apagarTarefa.php" value = "<?php echo $linha['id'] ?>">Exluir</button></td>
                    <td><button name="id" formaction="editarTarefa.php" value = "<?php echo $linha['id']; ?>">Editar</button></td>
                </tr>
        <?php endforeach;?>
    </table>
</form>
<a href="#">Voltar</a>

