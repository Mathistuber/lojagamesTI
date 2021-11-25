<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>Mundo dos Jogos</title>
    
   </head>

    <div class="conteiner">
    <?php
    session_start();
    $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
    ?>
    <form class="formlogin"action="../controllers/credenciais.php" method="post">
    <?php
    echo ($msg)
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-dark">Entrar</button>
  <a class="btn btn-outline-info" href="../views/cadastroUsuario.php" role="button">Cadastrar</button>
</form>
<body>
</body>
</html>