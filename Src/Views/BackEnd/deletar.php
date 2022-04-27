<?php


include_once("conexão.php");

$del = $_POST["del"];

$sql = "DELETE FROM cadastros WHERE id = ".$del;
if(mysqli_query($Conexao, $sql))
   {
      echo "Deletado com sucesso";
   }
else
{
   echo "falha ao deletar";
}
mysqli_close($Conexao);


?>