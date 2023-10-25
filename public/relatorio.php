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

  $sql = "SELECT * FROM ficha WHERE data_ocorrencia = '$dataOcorrencia'";

  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if ($count == 0) {

    $data = array("erro" => true, "mensagem" => "Data não encontrada");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  } else {

    $data = array("erro" => false, "mensagem" => "Consulta executada com sucesso");

    // Retorno todas as fichas daquela data
    $fichas = array();
    while ($row = mysqli_fetch_assoc($run_query)) {
      $fichas[] = $row;
    }

    $data["fichas"] = $fichas;

    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

  }

}

?>