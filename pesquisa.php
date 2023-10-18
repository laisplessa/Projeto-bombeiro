<?php
include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$cpfPaciente = $_POST["cpf_paciente"];

if ($cpfPaciente == null) {
    $data = array("erro" => true, "mensagem" => "Dados inválidos, por favor confira se preencheu todas as informações");
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();
} else {
    $sql = "SELECT * FROM ficha WHERE rg_cpf = '$cpfPaciente'";
    $run_query = mysqli_query($con, $sql);

    if (mysqli_num_rows($run_query) > 0) {
        $row = mysqli_fetch_assoc($run_query);

        // Você pode acessar campos específicos assim:
        $nomePaciente = $row["nome_paciente"];

        $data = array("erro" => false, "mensagem" => "Paciente encontrado", "paciente" => $row);
        header("Content-Type: application/json");
        echo json_encode($data);
        exit();
    } else {
        $data = array("erro" => true, "mensagem" => "Paciente não encontrado no sistema");
        header("Content-Type: application/json");
        echo json_encode($data);
        exit();
    }
}
?>