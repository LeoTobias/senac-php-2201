<?php

require 'conexao.php';

$update = $bd->exec('  UPDATE 
                            tarefas 
                        SET 
                            descricao = "Estudar mais" 
                        WHERE 
                            id = 19');

if($update){
    echo "Editado com sucesso!";
} else {
    echo "Falha na edição";
}