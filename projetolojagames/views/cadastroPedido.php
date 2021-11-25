<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoPedidos.php");
include_once("../models/bancoFuncionario.php");
include_once("../models/bancoCliente.php");
include_once("../models/bancoJogos.php");
$codUsuFK = $_SESSION["codUsu"];
$funcionario = listabuscafunUsu($conexao,$codUsuFK);
?>

<div class="row g-3">

  <div class="col-md-2">
    <label for="inputcodFun" class="form-label">Codigo</label>
    <input type="text" readonly value="<?php echo($funcionario["codFun"])?>" class="form-control" id="inputcodFun" placeholder="1234">

     <button type="submit" class="btn btn-dark">Buscar</button>
 </div>
  <div class="col-5">
    <label for="inputnomeFun" class="form-label">Funcionario</label>
    <input type="text" readonly value="<?=$funcionario['nomeFun']?>" class="form-control" id="inputNomeFun">
  </div>
  <?php
   $codCli= isset($_POST["codCli"])?$_POST["codCli"]:"0";
  ?>
  <div class="col-md-2">
    <label for="inputCodCli" class="form-label">Codigo</label>
    <form method="post" action="cadastroPedido.php">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="text" value="<?=$codCli?>" name="codCli" class="form-control" id="inputcodCli" required>
    <button class="btn btn-dark me-md-2 " type="submit">Pesquisar</button>
  </div>
  </form>
  </div>
  <?php
 
$clientes = isset($codCli)?listaTudoClienteCod($conexao,$codCli):"";
$_SESSION["codigoCliente"] = isset($_POST["codCli"])?$_POST["codCli"]:0;


   ?>
  <div class="col-5">
    <label for="inputCodCli" class="form-label">Cliente</label>
    <input type="text" name="nomeCli" required class="form-control" id="inputCodCli" >
  </div>
  <div class="col-md-4">
    <label for="inputnomeJog" class="form-label">Jogo</label>
    <input type="text" name="nomeJog" class="form-control" id="inputcodJog">
  </div>
  <div class="col-md-5">
    <label for="inputState" class="form-label">Quantidade</label>
    <select id="inputState" class="form-select">
      <option selected>Escolha...</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputvalorJog" class="form-label">Valor Unitario</label>
    <input type="text" name="precoJog" class="form-control" id="inputvalorJog">
  </div>
  <div class="col-md-2">
    <label for="inputtotalped" class="form-label">Total</label>
    <input type="text" name="totalped" class="form-control" id="inputtotalped">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-dark">Finalizar</button>
  </div>
</div>

<?php
include("../views/footer.php");
?>