<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$VARIAVEL_QUE_VC_QUISER = $_POST["NAME DO INPUT"];
$outrasVezes = $_POST["outras_vezes"];
$quantoTempo = $_POST["quanto_tempo"];
$problemaSaude = $_POST["problema_saude"];
$quaisProblemas = $_POST["quais_problemas"];
$medicacao = $_POST["medicacao"];
$horaMedicacao  = $_POST["hora_medicacao"];
$quaisMedicacoes = $_POST["quais_medicacoes"];
$alergico = $_POST["alergico"];
$alergia = $_POST["alergia"];
$ingeriu = $_POST["ingeriu"];
$ingeriuHorario = $_POST["ingeriu_horario"];


$mensagemErro = "";

if ($outroCampo == null) {
  $mensagemErro = "O campo Outro campo é obrigatório \n";
}

if ($outrasVezes == null) {
    $mensagemErro = "O campo aconteceu outras vezes é obrigatório \n";
}

if ($mensagemErro != "") {
  $data = array("erro" => true, "mensagem" => "Dados inválidos: " + $mensagemErro);
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

    $sql = "INSERT INTO usuario (CAMPO DA TABELA QUE EU QUERO, cpf, senha) VALUES ('$VARIAVEL_QUE_EU_QUISER', '$cpf', '$senha')";
    $run_query = mysqli_query($con, $sql);

}

?>