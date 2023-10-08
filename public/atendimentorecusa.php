<!DOCTYPE html>
<html lang="en">

<?php

session_start();

if ((!isset($_SESSION['cpf']) == true)) {
  header('location:login.html');
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atendimento Recusa</title>
  <link rel="stylesheet" type="text/css" href="style-atendimentorecusa.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

<body>
  <!-- <img src="logobombeiros.png" alt="descrehfasbhioanvidn" width="10%" height="5%"> -->
  <div class="principal">

    <!--Botão para acessar formulário de atendimento-->
    <div class="botaoatendimento">
      <b><a href="ficha.html"> Atendimento </a></b>
    </div>
    <!--Botão para acessar formulário de recusa de atendimento-->
    <div class="botaorecusa">
      <b><a href="ficha.html #termorec"> Recusa de Atendimento</a></b>
    </div>
  </div>

</body>

</html>