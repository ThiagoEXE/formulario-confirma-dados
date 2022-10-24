<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Cadastro</h1>
    </div>
    <div class="container">
        <form id="cadastro" action="confirma-dados.php" method="post">
            <input type="text" id="nomeForm" name="nomeForm" placeholder="Nome" required>
            <input type="email" id="emailForm" name="emailForm"placeholder="E-mail" required>
            <input type="text" id="telefoneForm" name="telefoneForm" placeholder="Telefone" required>
            <input type="submit" id="enviar" value="Enviar">
        </form>
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick=pegaValor();>
            Cadastrar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="confirmadados" action="confirma-dados.php" method="post">
                            <input type="text" id="nome" placeholder="Nome" required>
                            <input type="email" id="email" placeholder="E-mail" required>
                            <input type="text" id="telefone" placeholder="Telefone" required>
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var form = document.getElementById('cadastro');
        var nome = document.getElementById('nomeForm');
        var email = document.getElementById('emailForm');
        var telefone = document.getElementById('telefoneForm');
        var form = document.getElementById('confirmadados');
        var confirmaNome = document.getElementById('nome');
        var confirmaEmail = document.getElementById('email');
        var confirmaTelefone = document.getElementById('telefone');

        form.addEventListener('submit', function(e) {
            confirmaNome.value = nome;
            confirmaEmail.value = email;
            confirmaTelefone.value = telefone;

            //alert(nome.value + "\n" + email.value + "\n" + telefone.value);
            e.preventDefault(); //impede o envio do form
        });
    </script>
</body>

</html>