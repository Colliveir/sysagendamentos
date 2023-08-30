<?php
// conexão com o banco de dados por mysqli

// seta o horário para o de São Paulo
date_default_timezone_set('America/Sao_Paulo');
$usuario = 'root';
$senha = '';
$database = 'sysagendamentos';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
  die ("Falha ao conectar ao banco de dados: ".$mysqli->error);
}

// condição que envia o formulário para o banco de dados, variável por variável
if (isset($_POST['acao'])) {
  $numeroProtocolo = $_POST['numeroProtocolo'];
  $nome = $_POST['nome'];
  $cartSUS = $_POST['cartaoSUS'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $especialidade = $_POST['especialidade'];
  $nomeMedico = $_POST['nomeMedico'];
  $preparo = $_POST['preparo'];
  $comentario = $_POST['comentario'];
  $momento_registro = date('Y-m-d H:i:s');
  $sql = $mysqli->prepare("INSERT INTO `agendamentos` VALUES (null,?,?,?,?,?,?,?,?,?,?)");
  $sql->execute(array($numeroProtocolo,$nome,$cartSUS,$data,$hora,$especialidade,$nomeMedico,$preparo,$comentario,$momento_registro));
}

// end conexão com o banco de dados por mysqli