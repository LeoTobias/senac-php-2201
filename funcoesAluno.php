<?php

function cadastraAluno(array $aluno):bool //A variável $aluno só existe e funciona dentro da função cadastraAluno; Escopo de Função
{

    $f = fopen('dados.csv','a');
    $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu){
        return true;
    }else{
        return false;
    }

}

function listarAlunos():array
{
    $alunos = [];

    $f = fopen('dados.csv','r');

    while($linha = fgets($f)){
        var_dump($linha);
        echo "<br>";
    }

    return $alunos;
}
