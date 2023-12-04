<?php

include "db.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {


  $idRecusa = $_GET['idRecusa'];
  
  $sql = "SELECT * FROM recusa WHERE id_recusa = $idRecusa;";

  $run_query = mysqli_query($con, $sql);

  // Retorno todas as fichas daquela data
  $recusa = (object)[];

  while ($row = mysqli_fetch_assoc($run_query)) {
    $recusa = $row;
  }

  header("Content-Type: application/json");


  if ($recusa['id_usuario'] != $_SESSION['id'] && $_SESSION['tipoUsuario'] != 'ADMIN') {
    $data = array("erro" => true, "mensagem" => "Você não pode visualizar uma recusa que não foi cadastrada por você.");
    echo json_encode($data);
    exit();
  
  } else {
    echo json_encode($recusa);
    exit();
  }
}


$data = $_POST["data"];
$eu = $_POST["eu"];
$rgNumero = $_POST["rg_numero"];
$cpfNumero = $_POST["cpf_numero"];
$assinatura = $_POST["assinatura"];
$testemunha = $_POST["testemunha"];
$docTestemunha = $_POST["doc_testemunha"];
$testemunha2 = $_POST["testemunha2"];
$docTestemunha2 = $_POST["doc_testemunha2"];

$id = $_SESSION["id"];

if ($eu == null || $rgNumero == null || $cpfNumero == null) {

  $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $sqlFicha = "INSERT INTO recusa (id_usuario, id_recusa, data, eu, rg_numero, cpf_numero, assinatura, testemunha, doc_testemunha, testemunha2, doc_testemunha2)
VALUES ($id, null, '$data', '$eu', '$rgNumero', '$cpfNumero', '$assinatura', '$testemunha', '$docTestemunha', '$testemunha2', '$docTestemunha2')";

  $execucao = mysqli_query($con, $sqlFicha);

  if ($execucao) {
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
$conn->close();
?>