<?php
include_once("conexao.php");
$result_col = "SELECT mensagem FROM tabela";
$result_coluna = mysqli_query($conn, $result_col);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Metadados-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="estilo.css" rel="stylesheet" type="text/css">

    <!--BOOTSTRAP-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--Titulo da Pagina-->
    <title>Teste - Dev Jr</title>
</head>

<body>

    <div class='validacao'>
        <?php
        if ($conn->connect_errno) {
            echo "TESTE DE CONEXÃO COM O BANCO DE DADOS: FALHOU | (" . $conn->connect_errno . ")" . $conn->connect_error;
        } else {
            echo "<span style='color:green;'>TESTE DE CONEXÃO COM O BANCO DE DADOS: OK</span>";
        }
        ?>
    </div>

    <div class="myBackground">
        <div class="container">

            <div class="card">
                <form name='Registro' action="config.php" method="POST">
                    <h1>Mensagem</h1>
                    <input type="text" name="mensagem" placeholder='Digite sua mensagem' id="msg" class="form-control" required>
                    <br>
                    <button type="submit" name="submit" id="btn" class="btn btn-outline-dark">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="reg_msg">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Formato 1</th>
                    <th scope="col">Formato 2</th>
                    <th scope="col">Formato 3</th>
                    <th scope="col">Mensagem</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include_once("data.php");
                date_default_timezone_set('America/Sao_Paulo');
                while ($linha = mysqli_fetch_assoc($result_coluna)) { ?>

                    <tr>
                        <td> <?php echo date("d/m/Y"); ?> </td>
                        <td> <?php echo date("Y-m-d"); ?> </td>
                        <td> <?php echo $semana["$data"] . ", {$dia} de " . $mes_extenso[$mes] . " de {$ano}" . date(' H:i'); ?> </td>
                        <td> <?php echo $linha['mensagem']; ?> </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>