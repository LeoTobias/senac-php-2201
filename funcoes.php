<?php

function cadastraAluno(array $aluno):bool //A variável $aluno só existe e funciona dentro da função cadastraAluno; Escopo de Função
{

    $f = fopen('alunos.csv','a');
    $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu){
        return true;
    }else{
        return false;
    }

}

$funcionou = cadastraAluno(['matricula' => 140620, 'nome' => 'Leonardo']);

if($funcionou){
    echo "<br>Aluno cadastrado com sucesso!";
}else{
    echo "<br>Erro ao cadastrar o aluno!";
}