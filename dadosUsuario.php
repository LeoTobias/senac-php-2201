<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="tratarDados.php" method="POST">
            <input type="text" name="matricula" placeholder="Matricula" /> <!-- Id só funciona para o lado do cliente -->
            <br><br>
            <input type="text" name="aluno" placeholder="Nome" />
            <br><br>
            <input type="submit" value="Salvar">
            <br><br>
    </form>
</body>
</html>