<?php

include_once("conexão.php");



        $id = $_POST['id'];
        $nome = $_POST['nome'];
    

            $Atualizar = "UPDATE 'cadastros' SET nome = '$nome' WHERE 'id' = $id";
              $query = $mysqli -> query($Atualizar);
                echo "ATUALIZADO".$query->affected_rows;

?>