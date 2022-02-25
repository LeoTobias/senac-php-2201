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

echo "<br> Hoje é {$diaSemana[2]} <br><br>"; //Exemplo com interpolação. para index alfanúmerico.


// Forma que utilizei para criar o meu vetor 


$nome = array('Leo','Rafa','Matheus','Bono');
$senha = array('123','456', '678', '998');
$usuario = array_combine($nome, $senha);

echo "<pre> \n\n";

//var_dump($usuario);
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
        background-color: #9684d6;
    }
</style>
<table class="table">
<tr>
    <th>Nome</th>
    <th>Senha</th>
</tr>
    <?php foreach($usuario as $id => $valor):?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $valor; ?></td>
            </tr>
    <?php endforeach;?>
</table>
<?php 



/* Forma que o professor criou o vetor 


$usuarios[0] = ['nome'  => 'Leonardo',
                'senha' => '123'];
$usuarios[1] = ['nome'  => 'Matheus',
                'senha' => '456'];
$usuarios[2] = ['nome'  => 'Rafa',
                'senha' => '678'];

echo "<pre> \n\n";

var_dump($usuarios);

*/


$dias = [   'Dom' => ['Domingo','Domingo'], 
            'Seg' => ['Segunda','Segunda-Feira'],
            'Ter' => ['Terça','Terça-Feira'],
            'Qua' => ['Quarta','Quarta-Feira'],
            'Qui' => ['Quinta','Quinta-Feira'],
            'Sex' => ['Sexta','Sexta-Feira'],
            'Sab' => ['Sábado','Sábado']];

foreach($dias as $abreviacao => $nomeCompleto){
    echo "$abreviacao: {$nomeCompleto[0]} ou {$nomeCompleto[1]} <br>";
}

/*  Pode declarar na chamada um vetor para não precisar passar os index

foreach($dias as $abreviacao => [$nomeCurto, $nomeLongo]){
    echo "$abreviacao: $nomeCurto ou $nomeLongo <br>";
}

*/