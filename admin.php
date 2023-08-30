<?php
// inclui a página "conexao.php" e "users.php" para utilização das variáveis das mesmas
include('conexao.php');
// variáveis para consulta ao bd
$consulta = "SELECT * FROM agendamentos";
$con = $mysqli->query($consulta) or die($mysqli->error);
// variável sql que seleciona TUDO da tabela "agendamentos"
$sql = "SELECT * from agendamentos";
// seta o horário para o de São Paulo
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<header class="bg-dark">
    <img class="logo" src="images/logoWhite.png" alt="logo">
    <a class="btn btn-primary btnheader" href="admin.php" onclick="alert('Atualizado com sucesso!')">Atualizar</a>
    <a class="btn btn-primary btnheader" href="index.php">Início</a>
</header>


<br>

<body>

<!-- tabela depois da consulta ao bd -->
    <div class="all"> <!-- all -->
        <table class="table table-bordered border-primary">
            <tr style="text-align: center;">
                <td class="border border, p-3 mb-2 bg-primary text-white">Número Protocolo</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Nome</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Cartão SUS</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Data</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Hora</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Especialidade</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Nome Médico</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Preparo</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Comentário</td>

            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["numeroProtocolo"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["nome"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["cartaoSUS"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo date('d/m/Y', strtotime($dado["data"])); ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo  $dado["hora"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["especialidade"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["nomeMedico"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["preparo"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["comentario"]; ?></td>
                </tr>

            <?php
            }
            ?>
        </table>

    </div> <!-- end all -->

</body>

<footer class="homefooter bg-dark">
    <p>Developed by &copy;Bruno Collange - V1.<img src="images/logoWhite.png"></p>
</footer>

</html>