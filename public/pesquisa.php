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
    $sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";
    $run_query = mysqli_query($con, $sql);

    if (mysqli_num_rows($run_query) > 0) {
        $row = mysqli_fetch_assoc($run_query);

        $nome = $row["nome"];
        $cpfUsuario = $row["cpf"];

        // Crie uma única string para o documento
        $documento = "CPF: $cpfUsuario - Nome: $nome";

        $data = array("erro" => false, "mensagem" => "Usuário encontrado", "documento" => $documento);
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
