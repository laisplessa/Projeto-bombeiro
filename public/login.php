<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if ($cpf == null || $senha == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $sql = "SELECT * FROM usuario WHERE cpf = '$cpf' AND senha = '$senha' AND inativo = 0 LIMIT 1";

  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if ($count >= 1) {
    
    $usuario = (object)[];
  
    while ($row = mysqli_fetch_assoc($run_query)) {
      $usuario = $row;
    }

    $_SESSION['id'] = $usuario['id_cadastro'];

    $data = array("erro" => false, "mensagem" => "Login executado com sucesso");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    $data = array("erro" => true, "mensagem" => "Usuário não encontrado no sistema");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  }

}

?>