<?php
$nome = $_POST['nomeForm'];
$email = $_POST['emailForm'];
$telefone = $_POST['telefoneForm'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form id="confirmadados" action="confirma-dados.php" method="post">
            <input type="text" id="nome" placeholder="Nome" value="<?php echo $nome?>">
            <input type="email" id="email" placeholder="E-mail" value="<?php echo $email?>">
            <input type="text" id="telefone" placeholder="Telefone" value="<?php echo $telefone?>">
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>

</html>