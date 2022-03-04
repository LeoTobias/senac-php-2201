<?php
//include não da erro fatal
//require dá erro fatal, sendo usado quando for essencial aquele arquivo.
//require_once ele verifica se já foi chamado o arquivo e caso a resposta for SIM, ele não chama denovo.
require_once 'funcoesAluno.php';  

$aluno = $_POST['aluno'];
$matricula = $_POST['matricula'];


if(cadastraAluno(['matricula' => $matricula, 'nome' => $aluno])){
    echo 'Matricula realizada com sucesso! <br> Bem vindo: ' . $aluno;
}else {
    echo "Falha no cadatro, tente novamente";
}

//header("location: dadosUsuario.php");
//die();

echo "  <br><br> <a href='dadosUsuario.php'>Cadastrar outro</a>
        &nbsp;&nbsp;&nbsp;
        <a href='listarUsuarios.php'>Listar usuários</a>";



