<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if ($nome == null || $cpf == null || $senha == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";

  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if ($count >= 1) {

    $data = array("erro" => true, "mensagem" => "Usuário já cadastrado no sistema");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    $sql = "INSERT INTO usuario (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";
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