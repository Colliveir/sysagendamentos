<?php
// inclui a página "conexao.php"
include('conexao.php');
// seta o horário para o de São Paulo
date_default_timezone_set('America/Sao_Paulo');
?>

<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <img class="logo" src="images/logoWhite.png" alt="logo">
    <a class="btn btn-primary btnheader" href="index.php" onclick="alert('Atualizado com sucesso!')">Atualizar</a>
    <a class="btn btn-primary btnheader" href="admin.php">Visualizar Agendamentos</a>
</header>

<body>

<!-- formulário para enviar o agendamento -->
    <div class="painel">
        <h3 class="text-dark"><b>Gerar Agendamento:</b></h3><br>
        <form method="post">
            <div class="row">
                <div class="col">
                    <input class="inputpainel" type="text" name="numeroProtocolo" id="numprot" placeholder="Número do protocolo" required><br>
                    <input class="inputpainel" type="text" name="nome" placeholder="Nome" id="name" required><br>
                    <input class="inputpainel" type="number" name="cartaoSUS" placeholder="Cartão SUS" required><br>
                    <input class="inputpainel" type="date" name="data" required><br>
                    <input class="inputpainel" type="time" name="hora" required><br>
                    <select name="especialidade" required>
                        <option value="">Especialidade</option>
                        <option value="Ortopedista">Ortopedista</option>
                        <option value="Ultrassom">Ultrassom</option>
                    </select>
                    <input class="inputpainel" type="text" name="nomeMedico" placeholder="Nome Médico" required><br>
                </div>
                <div class="col">
                    <textarea class="inputpainel" type="text" name="preparo" placeholder="Preparo" required></textarea><br>
                    <textarea class="inputpainel" type="text" name="comentario" placeholder="Comentário (opcional)"></textarea><br>
                </div>
            </div><br>
            <input class="btn btn-primary submit" name="acao" type="submit" onclick="alert('Enviado com sucesso!')">
        </form>

    </div>


</body>

<footer class="homefooter">
    <p>Developed by &copy;Bruno Collange - V1.<img src="images/logoWhite.png"></p>
</footer>

</html>