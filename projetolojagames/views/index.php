<?php
session_start();
if(!$_SESSION["emailUsu"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Vc não tem acesso..tente novamente.</div>";
    header("Location:../views/logar.php");
}
include_once("header.php");
?>
<img src="img/Jogosonline.gif" width="100%">

<?php
include_once("footer.php");
?>