<?php 

$nome = $_POST['aluno'];
$numero = $_POST['numero'];

// $numero = $numero > 1000 ? 1000 : $numero; - Estabelecendo um limite para não travar o browser

 for ($i = 0; $i < $numero; $i++) {
    echo "$nome <br>";

    // if($i > 1000) break; Estabelecendo um limite para não travar o browser
}

    
$f = fopen('alunitos.csv', 'a');
$e = fwrite($f, "{$nome};\"{$numero}\"\n");
fclose($f);

