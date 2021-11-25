<?php
session_start();
$email = isset($_SESSION["emailUsu"])?$_SESSION["emailUsu"]:null;
if($email != null){
    include("../views/header.php");
}
?>  
    <form method="Post" action="../controllers/inserirUsuario.php">
        <p>email <input type="email" name="emailUsuario"></p>
        <p>senha<input type="password" name="senhaUsuario"></p>
        <p>PIN<input type="text" name="pin"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
if($email != null){
include("../views/footer.php");
}
?>



