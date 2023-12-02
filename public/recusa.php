<?php

include "db.php";

session_start();

$eu = $_POST["eu"];
$rgNumero = $_POST["rg_numero"];
$cpfNumero = $_POST["cpf_numero"];
$assinatura = $_POST["assinatura"];
$testemunha = $_POST["testemunha"];
$docTestemunha = $_POST["doc_testemunha"];
$testemunha2 = $_POST["testemunha2"];
$docTestemunha2 = $_POST["doc_testemunha2"];

if ($eu == null || $rgNumero == null || $cpfNumero == null ) {

    $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();
  
  } else {

$sqlFicha = "INSERT INTO recusa (id_recusa, eu, rg_numero, cpf_numero, assinatura, testemunha, doc_testemunha, testemunha2, doc_testemunha2)
VALUES (null, '$eu', '$rgNumero', '$cpfNumero', '$assinatura', '$testemunha', '$docTestemunha', '$testemunha2', '$docTestemunha2')";

$execucao = mysqli_query($con, $sqlFicha);

if($execucao){
  $data = array("erro" => false, "mensagem" => "Recusa de atendimento registrada com sucesso");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $data = array("erro" => true, "mensagem" => "Erro ao realizar cadastro de Recusa de atendimento");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();
}
  }
// Fechar a conexão com o banco de dados
$conn-> close();
?>
