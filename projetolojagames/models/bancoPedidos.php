<?php
 function inserirPedidos($conexao,$codCliFK,$codFunFK,$codJogFK,$valorUnit){
     $query="insert into tbpedidos(codCliFK,codFunFK,codJogFK,valorUnit)values
     ('{$codCliFK}','{$codFunFK}','{$codJogFK}','{$valorUnit}')";
 
     $resultados = mysqli_query($conexao,$query);
     return $resultados;
 }

?>