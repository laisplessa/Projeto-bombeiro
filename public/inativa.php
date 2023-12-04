<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();




if (isset($_POST["id"])) {

  $id = $_POST["id"];
  $sql = "UPDATE usuario SET inativo = 1 WHERE id_cadastro = $id";
  $run_query = mysqli_query($con, $sql);
  


  if ($run_query) {

    $data = array("erro" => false, "mensagem" => "Usuário inativado com sucesso");
    header("Content-Type: application/json");
    echo json_encode($data);

  } else {

    $data = array("erro" => true, "mensagem" => "Erro ao inativar usuário");
    header("Content-Type: application/json");
    echo json_encode($data);
  }
} else {

  $cpf = $_POST["cpf"];

  if ($cpf == null) {

    $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    $sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";

    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);

    if ($count == 0) {

      $data = array("erro" => true, "mensagem" => "Bombeiro não encontrado");
      header("Content-Type: application/json");
      echo json_encode($data);
      exit();

    } else {

      //Dados do usuário
      $usuario = (object) [];

      while ($row = mysqli_fetch_assoc($run_query)) {
        $usuario = $row;
      }

      header("Content-Type: application/json");
      echo json_encode($usuario);
      exit();

    }

  }

}

?>