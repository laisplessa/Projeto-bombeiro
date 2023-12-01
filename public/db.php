<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bombeiro";

// Create connection
$con = @mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    $data = array("erro" => true, "mensagem" => "Falha ao obter conexão com o banco de dados " . mysqli_connect_error());
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();
}


?>