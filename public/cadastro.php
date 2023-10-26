<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$cargo = $_POST["cargo"];
$cidade = $_POST["cidade"];
$dataNascimento = $_POST["data_nascimento"];
$senha = $_POST["senha"];

if ($nome == null || $cpf == null || $telefone == null || $cargo == null || $cidade == null || $dataNascimento == null || $senha == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  SELECT * FROM usuario WHERE cpf = '$cpf' LIMIT 1;

  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if ($count >= 1) {

    $data = array("erro" => true, "mensagem" => "Usuário já cadastrado no sistema");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    INSERT INTO usuario (nome, cpf, telefone, cargo, cidade, data_nascimento, senha) VALUES ('$nome', '$cpf', '$telefone', '$cargo', '$cidade', '$dataNascimento', '$senha');
    $run_query = mysqli_query($con, $sql);

    if ($run_query) {

      $_SESSION['cpf'] = $cpf;

      $data = array("erro" => false, "mensagem" => "Usuário cadastrado com sucesso");
      header("Content-Type: application/json");
      echo json_encode($data);
      exit();

    } else {
      
      $data = array("erro" => true, "mensagem" => "Falha ao salvar usuário");
      header("Content-Type: application/json");
      echo json_encode($data);
      exit();
    }

  }

}


?>