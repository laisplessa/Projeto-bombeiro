<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$dataOcorrencia = $_POST["data_ocorrencia"];

if ($dataOcorrencia == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $dataOcorrenciaIni = $dataOcorrencia . " 00:00:00";
  $dataOcorrenciaFim = $dataOcorrencia . " 23:59:59";

  $sql = "SELECT * FROM ficha WHERE data >= '$dataOcorrenciaIni' and data <= '$dataOcorrenciaFim'";

  $run_query = mysqli_query($con, $sql);

  // Retorno todas as fichas daquela data
  $fichas = array();

  while ($row = mysqli_fetch_assoc($run_query)) {
    array_push($fichas, $row);
  }

  $data["fichas"] = $fichas;

  $sql = "SELECT * FROM recusa WHERE data >= '$dataOcorrenciaIni' and data <= '$dataOcorrenciaFim'";
  
  $run_query = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_assoc($run_query)) {
    array_push($data["fichas"], $row);
  }

  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

}

?>