<?php

	include_once("conexao.php");

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $prof = $_POST['prof'];
    $dataNascimento = $_POST['dataNascimento'];
    $estadoCivil = $_POST['estadoCivil'];
    $sexo = $_POST['sexo'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $numero = $_POST['numero'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $celular = $_POST['celular'];
    $contato = $_POST['contato'];
    $email = $_POST['email'];
    $identidade = $_POST['identidade'];
    $cpf = $_POST['cpf'];
    $veiculo = $_POST['veiculo'];
    $habilitacao = $_POST['habilitacao'];

    $sql = "INSERT INTO pessoa (nome, cargo_id, prof, dataNascimento, estadoCivil_id, sexo_id, cep, rua, bairro, cidade, uf, numero, telefone1, telefone2, celular, contato, email, identidade, cpf, veiculo_id, habilitacao_id) VALUES ('$nome', '$cargo', '$prof', '$dataNascimento', '$estadoCivil', '$sexo', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$numero', '$telefone1', '$telefone2', '$celular', '$contato', '$email', '$identidade', '$cpf', '$veiculo', '$habilitacao')";
    
    $salvar = mysqli_query($conexao, $sql);

    $linhas = mysqli_affected_rows($conexao);

?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Home</title>
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="./Imagens/icone.jpg" type="image/jpg">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="./Estilo/formulario.css" /> 
        <link rel="stylesheet" type="text/css" href="./Estilo/estilo.css" />

        <script src="https://kit.fontawesome.com/ef7a547aae.js" crossorigin="anonymous"></script>
	</head>

	<body>

        <header class="navbar-light">
            <nav class="navbar navbar-expand-lg navbar-light flex-column pb-3">
                <a class="navbar-brand" href="./index.html"><img src="./Imagens/logo.png" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav nav-pills text-center">
                        <a class="nav-item nav-link" href="./index.html">Página inicial</a>
                        <a class="nav-item nav-link active" href="./cadastrar.php">Oportunidades</a>                        
                        <a class="nav-item nav-link" href="./contratar.php">Contrate!</a>
                    </div>
                </div>
             </nav>
        </header>           
	
		<main>

            <div class="container d-flex justify-content-center align-items-center flex-wrap mt-5 mb-5">

                <div class="row">
                    <div class="col-sm">
                        <h1>Confirmação de Cadastro:</h2>
                        
                        <?php

                            if ($linhas =! 1) {
                                print "<h2>CPF já cadastrado!</h2>";
                            } else {
                                print "<h2>Cadastro efetuado com sucesso!</h2>";
                            }

                        ?>

                    </div>
                </div>

            </div>
                
		</main>

        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a href="https://github.com/stella-oliveira/" target="_blank">Stella Oliveira</a>
            </div>
        </footer>

    </body>
</html>