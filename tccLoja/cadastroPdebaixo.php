<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');
        
        $nomePdebaixo = $_POST['nomePdebaixo'];
        $codigoPdebaixo = $_POST['codigoPdebaixo'];
        $precoPdebaixo = $_POST['precoPdebaixo'];
        $qtdePdebaixo = $_POST['qtdePdebaixo'];

        $result = mysqli_query($conexao, "INSERT INTO partedebaixo(nomePdebaixo,codigoPdebaixo,precoPdebaixo,qtdePdebaixo) 
        VALUES ('$nomePdebaixo','$codigoPdebaixo','$precoPdebaixo','$qtdePdebaixo')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro das Partes de Baixo</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(90deg, rgb(255, 136, 0), rgb(131, 4, 4));
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 28%;
            color: black;
        }

        fieldset{
            border: 3px solid red;
        }

        legend{
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(45deg, orange, red);
            border-radius: 8px;
            color: white;
        }

        .inputBox{
            position: relative;
            color: black;
        }

        .inputUser{
            border: none;
            background-color: whitesmoke;
            border-radius: 5px;
            border-bottom: 1px solid whitesmoke;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
        }

        .labelInput{
            position: relative;
            top: 5px;
            left: 0px;
            color: white;
        }

        #submit{
            background-image: linear-gradient(45deg, orange, red);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <!--<a href="home.php">Voltar</a>-->
    <div class="box">
        <form action="cadastroPdebaixo.php" method= "POST">
            <fieldset>
                <legend><b>Cadastro das Partes de Baixo</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomePdebaixo" id="nomePdebaixo" class="inputUser" required>
                    <label for="nomePdebaixo" class="labelInput">Nome</label>
                </div>
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="codigoPdebaixo" id="codigoPdebaixo" class="inputUser" required>
                    <label for="codigoPdebaixo" class="labelInput">Código</label>
                </div>
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="precoPdebaixo" id="precoPdebaixo" class="inputUser" required>
                    <label for="precoPdebaixo" class="labelInput">Preço</label>
                </div>
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="qtdePdebaixo" id="qtdePdebaixo" class="inputUser" required>
                    <label for="qtdePdebaixo" class="labelInput">Quantidade</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>