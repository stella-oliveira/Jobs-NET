<?php

	include_once("conexao.php");

    $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

    $sql = "SELECT * FROM pessoa_cadastrada WHERE cargo LIKE '%$filtro%' ORDER BY nome";

    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Contrate</title>
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
                <a class="navbar-brand" href="index.html"><img src="./Imagens/logo.png" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav nav-pills text-center">
                        <a class="nav-item nav-link" href="./index.html">Página inicial</a>
                        <a class="nav-item nav-link" href="./cadastrar.php">Oportunidades</a>                        
                        <a class="nav-item nav-link active" href="./contratar.php">Contrate!</a>
                    </div>
                </div>
             </nav>
        </header>            
	
		<main>

        <div class="container d-flex justify-content-center align-items-center flex-wrap mt-5 mb-5">

            <div class="row">
                <div class="col-sm">

                    <h1 class="mb-5">Registros:</h1>
                    
                    <form method="get" action="">
                        <div class="form-inline d-flex justify-content-center">
                            <label class="mr-3">Filtrar por cargo:</label> 
                            <input type="text" class="form-control" name="filtro" autofocus />
                            <button type="submit" class="btn btn-primary ml-3">Pesquisar</button>                            
                        </div>                        
                    </form>

                    <br><br>

                    <?php

                        print "<h2>$registros registro(s) encontrado(s).</h2>";
                        print "<h4>Resultado da pesquisa com a palavra <b>$filtro</b></h4><br>";

                        while($exibirRegistros = mysqli_fetch_array($consulta)){

                            $nome = $exibirRegistros[0];
                            $cargo = $exibirRegistros[1];
                            $prof = $exibirRegistros[2];
                            $dataNascimento = $exibirRegistros[3];
                            $estadoCivil = $exibirRegistros[4];
                            $sexo = $exibirRegistros[5];

                            $rua = $exibirRegistros[6];
                            $numero = $exibirRegistros[7];
                            $bairro = $exibirRegistros[8];
                            $cidade = $exibirRegistros[9];
                            $uf = $exibirRegistros[10];
                            $cep = $exibirRegistros[11];
                            
                            $telefone1 = $exibirRegistros[12];
                            $telefone2 = $exibirRegistros[13];
                            $celular = $exibirRegistros[14];
                            $contato = $exibirRegistros[15];
                            $email = $exibirRegistros[16];
                            $identidade = $exibirRegistros[17];
                            $cpf = $exibirRegistros[18];
                            $veiculo = $exibirRegistros[19];
                            $habilitacao = $exibirRegistros[20];
                    
                        print "<div class='container-fluid'>
                                <div class='col'>";
                        
                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text' id='consulta_nome'>Nome</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$nome'>
                                    </div>
                                </div>";
                            

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Cargo pretendido</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$cargo'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Profissão</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$prof'>
                                    </div>
                                </div>";
                        
                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Data de Nascimento</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$dataNascimento'>
                                    </div>
                                </div>";
                        
                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Estado Civil</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$estadoCivil'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Sexo</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$sexo'>
                                    </div>
                                </div>";
                        
                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Endereço</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$rua, $numero, $bairro - $cidade, $uf - $cep'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Telefones</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$telefone1 / $telefone2'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Celular</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$celular'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Contato</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$contato'>
                                    </div>
                                </div>";
                        
                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>E-mail</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$email'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Identidade</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$identidade'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>CPF</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$cpf'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Possui veículo?</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$veiculo'>
                                    </div>
                                </div>";

                        print "<div class='form-group row mb-1 d-flex justify-content-center align-items-center flex-wrap'>
                                    <label class='col-sm-4 col-form-label input-group-text'>Possui habilitação?</label>
                                    <div class='col-sm-8'>
                                        <input type='text' readonly class='form-control' id='consulta' value='$habilitacao'>
                                    </div>
                                </div>";

                        print "</div></div>";
                        print "<br><br>";


                    }

                    //    mysqli_close($conexao);

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