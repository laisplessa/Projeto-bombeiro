<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$VARIAVEL_QUE_VC_QUISER = $_POST["NAME DO INPUT"]
$outrasVezes = $_POST["outrasVezes"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$mensagemErro = "";

if ($outrasVezes == null) {
    $mensagemErro = "O campo Aconteceu outras vezes é obrigatório \n";
}
if ($outroCampo == null) {
    $mensagemErro = "O campo Outro campo é obrigatório \n";
}

if ($mensagemErro != "") {
  $data = array("erro" => true, "mensagem" => "Dados inválidos: " + $mensagemErro);
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

    $sql = "INSERT INTO usuario (CAMPO DA TABELA QUE EU QUERO, cpf, senha) VALUES ('$VARIAVEL_QUE_EU_QUISER', '$cpf', '$senha')";
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