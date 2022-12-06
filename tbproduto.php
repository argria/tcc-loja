<?php
include_once('config.php');
if (isset($_POST['submit'])) {
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



    $nomeProduto = $_POST['nomeProduto'];
    $idProduto = $_POST['idProduto'];
    $nomeCategoria = $_POST['nomeCategoria'];
    $precoProduto = $_POST['precoProduto'];
    $qtdeProduto = $_POST['qtdeProduto'];

    $result = mysqli_query($conexao, "INSERT INTO tbproduto(nomeProduto,idProduto,nomeCategoria,precoProduto,qtdeProduto) 
        VALUES ('$nomeProduto','$idProduto','$nomeCategoria','$precoProduto','$qtdeProduto')");

    if ($result === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        //echo "<script>window.location = 'select.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
    $conexao->close();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(90deg, rgb(255, 136, 0), rgb(131, 4, 4));
        }

        .box {
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

        fieldset {
            border: 3px solid red;
        }

        legend {
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(45deg, orange, red);
            border-radius: 8px;
            color: white;
        }

        .inputBox {
            position: relative;
            color: black;
        }

        .inputUser {
            border: none;
            background-color: whitesmoke;
            border-radius: 5px;
            border-bottom: 1px solid whitesmoke;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
        }

        .labelInput {
            position: relative;
            top: 5px;
            left: 0px;
            color: white;
        }

        #submit {
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
        <form action="tbproduto.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Produtos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeProduto" id="nomeProduto" class="inputUser" required>
                    <label for="nomeProduto" class="labelInput">Nome</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="idProduto" id="idProduto" class="inputUser" required>
                    <label for="idProduto" class="labelInput">Código</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="nomeCategoria" class="labelInput">Categoria</label>

                    <select class="form-control" name="ddlEstCivil" id="ddlEstCivil">
                        <?php

                        $sql = "SELECT idCategoria, nomeCategoria
                            FROM tbcategoria
                            ORDER BY nomeCategoria";
                        //echo $sql;
                        $arrayCategoria = $conexao->query($sql);
                        var_dump($arrayCategoria);

                        while ($rowCategoria = $arrayCategoria->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $rowCategoria["idCategoria"]; ?>"><?php echo $rowCategoria["nomeCategoria"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="precoProduto" id="precoProduto" class="inputUser" required>
                    <label for="precoProduto" class="labelInput">Preço</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="qtdeProduto" id="qtdeProduto" class="inputUser" required>
                    <label for="qtdeProduto" class="labelInput">Quantidade</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>