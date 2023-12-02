<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin/Login</title>
  <link rel="stylesheet" href="botoes.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<a class="buttonIni" href="sair.php">Sair</a>
<div class="logo">
            <img src="logobombeiros.png" height="140" width="140" align="right">
    </div>
    
        </div> 
<div class="titulo"><b> O que você deseja?</b></div>
    <!--Botão para acessar formulário de atendimento-->
      <b><a class="botoes" href="ficha.html"> Atendimento </a></b>
      <b><a class="botoes" href="recusa.html"> Recusa de Atendimento</a></b>
      <b><a class="botoes" href="relatorio.html"> Pesquisar ocorrência </a></b>
    </div>
</div>

    <?php
      session_start();
      if ($_SESSION['tipoUsuario'] == 'ADMIN') {
    ?>

      <b><a class="botoes" href="cadastro.html"> Cadastrar Usuários </a></b>

    <?php
      }
    ?>
    
    <?php
      if ($_SESSION['tipoUsuario'] == 'ADMIN') {
    ?>
    
      <b><a class="botoes" href="inativa.html"> Inativar Usuários </a></b>

    <?php
      }
    ?>

  </div>

</body>

</html>