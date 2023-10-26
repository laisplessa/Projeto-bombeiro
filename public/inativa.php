<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$cpf = $_POST["cpf"];

if ($cpf == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $sql = "SELECT * FROM usuario WHERE nome = '$cpf'";

  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if ($count == 0) {

    $data = array("erro" => true, "mensagem" => "Bombeiro não encontrado");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    $data = array("erro" => false, "mensagem" => "Consulta executada com sucesso");
    $row = mysqli_fetch_assoc($run_query);
    $cpf = $row["cpf"];

    echo "<h1>Inativar usuário</h1>";
    echo "<p>CPF: $cpf</p>";

    if (isset($_GET["inativar"])) {

      $sql = "UPDATE usuario SET status = 0 WHERE cpf = '$cpf'";

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
    }
  }

}

?>