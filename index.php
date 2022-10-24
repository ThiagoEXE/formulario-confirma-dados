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
        <form id="cadastro" method="post">
            <input type="text" id="nomeForm" name="nomeForm" placeholder="Nome" required>
            <input type="email" id="emailForm" name="emailForm" placeholder="E-mail" required>
            <input type="text" id="telefoneForm" name="telefoneForm" placeholder="Telefone" required>
            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Cadastrar
            </button>
            <!--<input type="submit" id="enviar" value="Enviar">-->
        </form>
        <!--Button trigger modal -->

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
                            <input type="text" id="nome" required value="nome">
                            <input type="email" id="email" value="email" required>
                            <input type="text" id="telefone" value="telefone" required>
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


       /** form.addEventListener('submit', function(e) {

            alert(nome.value + "\n" + email.value + "\n" + telefone.value);
            e.preventDefault(); //impede o envio do form
        });*/
        form.addEventListener('submit', function(e) {

            var form = document.getElementById('confirmadados');
            var confirmaNome = document.getElementById('nome');//.value = nome;
            confirmaNome.value = nome.value;
            var confirmaEmail = document.getElementById('email');//.value = email;
            confirmaEmail.value = email.value;
            var confirmaTelefone = document.getElementById('telefone');//.value = telefone;
            confirmaTelefone.value = telefone.value;
            e.preventDefault();
        });
    </script>
</body>

</html>