<?php

	include_once("conexao.php");
    
?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Cadastro</title>
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

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <script src="./Javascript/jQuery Validation/lib/jquery.js"></script>
   		<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>
        <script src="./Javascript/jQuery Validation/dist/jquery.validate.js"></script>

        <script type="text/javascript" src="./Javascript/validandoForm.js"></script>
        <script type="text/javascript" src="./Javascript/validandoCPF.validate.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script type="text/javascript" src="./Javascript/cep.js"></script>

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
                        <a class="nav-item nav-link active" href="./cadastrar.php">Oportunidades</a>                        
                        <a class="nav-item nav-link" href="./contratar.php">Contrate!</a>
                    </div>
                </div>
             </nav>
        </header>        
	
		<main>

            <form id="formularioCadastro" class="form-horizontal" method="post" action="processa.php">

                <div class="container mt-5">
                    
                    <h1 class="mb-5">Faça seu cadastro abaixo e aproveite as oportunidades!</h1>
                    
                    <div class="row">  

                            <div class="col-md-8 formulario">
                                <h2>Dados pessoais</h2>
                                <div class="panel panel-default">                  
                                    <div class="panel-body">    

                                            <!------------ NOME E CARGO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nome">Nome</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" autofocus required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cargo">Cargo pretendido</label>
                                                    <div class="validar">
                                                        <select id="cargo" name="cargo" class="form-control">
                                                            <option>Escolha uma opção</option>

                                                            <?php
                                                                $sql_cargo = "SELECT * FROM cargo";
                                                                $salvar_cargo = mysqli_query($conexao, $sql_cargo);
                                                                while($row_cargo = mysqli_fetch_assoc($salvar_cargo)){ ?>
                                                                    <option value="<?php echo $row_cargo['id']; ?>"><?php echo $row_cargo['nome']; ?></option> <?php
                                                                }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ PROFISSAO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-3">
                                                    <label for="prof">Profissão</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control " id="prof" name="prof" placeholder="Digite sua profissão" required /> 
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ DATA DE NASCIMENTO, ESTADO CIVIL E SEXO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="dataNascimento">Data de Nascimento</label>
                                                    <div class="validar">
                                                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="estadoCivil">Estado Civil</label>
                                                    <div class="validar">
                                                        <select id="estadoCivil" name="estadoCivil" class="form-control" >
                                                            <option>Escolha uma opção</option>
                                                            
                                                            <?php
                                                                $sql_estado_civil = "SELECT * FROM estadoCivil";
                                                                $salvar_estado_civil = mysqli_query($conexao, $sql_estado_civil);
                                                                while($row_estado_civil = mysqli_fetch_assoc($salvar_estado_civil)){ ?>
                                                                    <option value="<?php echo $row_estado_civil['id']; ?>"><?php echo $row_estado_civil['nome']; ?></option> <?php
                                                                }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="sexo">Sexo</label>
                                                    <div class="validar">
                                                        <select id="sexo" name="sexo" class="form-control">
                                                            <option>Escolha uma opção</option>

                                                            <?php
                                                                $sql_sexo = "SELECT * FROM sexo";
                                                                $salvar_sexo = mysqli_query($conexao, $sql_sexo);
                                                                while($row_sexo = mysqli_fetch_assoc($salvar_sexo)){ ?>
                                                                    <option value="<?php echo $row_sexo['id']; ?>"><?php echo $row_sexo['nome']; ?></option> <?php
                                                                }
                                                            ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ CEP, RUA, BAIRRO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="cep">CEP</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="cep" name="cep" value="" maxlength="9" onblur="pesquisacep(this.value);" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="rua">Rua</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="rua" name="rua" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="bairro">Bairro</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="bairro" name="bairro" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ CIDADE E UF ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="cidade">Cidade</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="cidade" name="cidade" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="estado">Estado</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="uf" name="uf" maxlength="2" required />
                                                    </div>
                                                </div>                                    
                                            </div>

                                            <!------------ CASA OU APARTAMENTO ------------>
                                            <div class="form-row">                        
                                                <div class="form-group col-md-12">
                                                    <label>Número da casa ou prédio / bloco / apartamento</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº da casa ou apartamento" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ TELEFONE E CELULAR ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="telefone1">Telefone fixo 1</label>
                                                    <div class="validar">
                                                        <input type="number" class="form-control" id="telefone1" name="telefone1" minlength="8" maxlength="8" placeholder="Telefone fixo" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="telefone2">Telefone fixo 2</label>
                                                    <div class="validar">
                                                        <input type="number" class="form-control" id="telefone2" name="telefone2" minlength="8" maxlength="8" placeholder="Telefone fixo" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="celular">Celular</label>
                                                    <div class="validar">
                                                        <input type="number" class="form-control" id="celular" name="celular" minlength="10" maxlength="11" placeholder="Celular com DDD" required />
                                                    </div>
                                                </div>                                    
                                            </div>

                                            <!------------ CONTATO E E-MAIL ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contato">Contato</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="contato" name="contato" placeholder="Digite seu contato">
                                                    </div>
                                                </div>  
                                                <div class="form-group col-md-6">
                                                    <label for="email">E-mail</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required />
                                                    </div>
                                                </div>                                   
                                            </div>   
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 formulario">   
                                <h2>Documentos</h2> 
                                <div class="panel panel-default">                   
                                    <div class="panel-body">                               

                                            <!------------ ID ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="identidade">Identidade</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="identidade" name="identidade" placeholder="Digite seu RG">
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ CPF ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="cpf">CPF</label>
                                                    <div class="validar">
                                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required /> 
                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ VEÍCULO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="veiculo">Possui veículo?</label>
                                                    <div class="validar">
                                                        <select id="veiculo" name="veiculo" class="form-control" >
                                                            <option>Escolha uma opção</option>

                                                            <?php
                                                                $sql_veiculo = "SELECT * FROM veiculo";
                                                                $salvar_veiculo = mysqli_query($conexao, $sql_veiculo);
                                                                while($row_veiculo = mysqli_fetch_assoc($salvar_veiculo)){ ?>
                                                                    <option value="<?php echo $row_veiculo['id']; ?>"><?php echo $row_veiculo['nome']; ?></option> <?php
                                                                }
                                                            ?>
                                                            
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <!------------ HABILITAÇÃO ------------>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="habilitacao">Possui habilitação?</label>
                                                    <div class="validar">
                                                        <select id="habilitacao" name="habilitacao" class="form-control" >
                                                            <option>Escolha uma opção</option>

                                                            <?php
                                                                $sql_habilitacao = "SELECT * FROM habilitacao";
                                                                $salvar_habilitacao = mysqli_query($conexao, $sql_habilitacao);
                                                                while($row_habilitacao = mysqli_fetch_assoc($salvar_habilitacao)){ ?>
                                                                    <option value="<?php echo $row_habilitacao['id']; ?>"><?php echo $row_habilitacao['nome']; ?></option> <?php
                                                                }
                                                            ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                        
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                <div class="form-group text-center pb-2">
                    <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
                </div>

            </form>
		</main>

        <footer class="text-center">
            <p class="p-3">
                © 2021 Copyright • <a href="https://github.com/stella-oliveira/" target="_blank">Stella Oliveira</a>
            </p>            
        </footer>

        <script type="text/javascript">

            $(document).ready(function () { 
                var $seuCampoCpf = $("#cpf");
                $seuCampoCpf.mask('000.000.000-00', {reverse: true});
            });

        </script>

    </body>
</html>