<?php

//Comentário de linha

/*
Comentário de bloco
*/

define('XPTO', 'Valor sempre igual'); // Utilizamos a função interna define(), para criarmos uma constante.

echo XPTO;  // Para exibir a constante não necessita de $.

$num = 2;

$var = '<br>' . " Olá mundo! $num" . '<br>' ; // Com aspas duplas conseguimos fazer a interpolação, já com a simples não. No php o ponto é o operador de concatenação.

echo $var;



//var_dump($var);

//phpinfo(); Informações importantes, como variáveis de ambiente.

//Após o café....

$domingo = 'Domingo';
$segunda = 'Segunda-Feira';
$terca = 'Terça-feira';
$quarta = 'Quarta-feira';
$quinta = 'Quinta-feira';
$sexta = 'Sexta-feira';
$sabado = 'Sábado';

$diaSemana = array( 1  => 'Domingo',          // Primeiro vem o índece e depois o valor.
                    2  => 'Segunda-feira',    //Podemos fazer um vetor
                    3  => 'Terça-feira',
                    8  => 'Quarta-feira',
                    10 => 'Quinta-feira',
                    6  => 'Sexta-feira',
                    4  => 'Sábado');

$contatos = [
    'Matheus',
    'Rafael',
    'Dantoni'
];

echo '<br> Hoje é ' . $diaSemana[10]; // Exemplo sem interpolação.

echo "<br> Hoje é {$diaSemana[2]} <br><br>"; //Exemplo com interpolação.


/* Forma que utilizei para criar o meu vetor 


$nome = array('Leo','Rafa','Matheus');
$senha = array('123','456', '678');
$usuario = array_combine($nome, $senha);

echo "<pre> \n\n";

var_dump($usuario);

*/




$usuarios[0] = ['nome'  => 'Leonardo',
                'senha' => '123'];
$usuarios[1] = ['nome'  => 'Matheus',
                'senha' => '456'];
$usuarios[2] = ['nome'  => 'Rafa',
                'senha' => '678'];

echo "<pre> \n\n";

var_dump($usuarios);