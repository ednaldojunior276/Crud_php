

<?php

include_once("conexão.php");


$sql = mysqli_query($Conexao, "SELECT * FROM cadastros") or die (mysqli_error($Conexao));


?>
<head>
    <meta charset = "utf-8">

    <style>
    
        table
        {
            border: 1px;
        }
        
    
    </style>


</head>
<body>
<form method = "POST" action = "deletar.php">
<table border = "1">
    
    <tr>
            <td>ID </td>
            <td>NOME </td>
            <td>SOBRENOME </td>
            <td>CPF </td>
            <td>RG </td>
            <td>ENDEREÇO </td>
            <td>CIDADE </td>
            <td>ESTADO </td>
            <td>CEP </td>
            <td>SEXO </td>
            <td>ESTADO CIVIL </td>
            <td>E-MAIL </td>
            <td>TELEFONE </td>
            <td>CELULAR </td>
            <td>RESIDENCIAL </td>
    </tr>
    
    <?php while($aux = mysqli_fetch_assoc($sql)) { ?>
        
        <tr>
            <td><?php      echo " ".$aux["id"]." ";   ?>         </td>
            <td><?php      echo "".$aux["nome"]." ";   ?>        </td>
            <td><?php      echo "".$aux["sobrenome"]." "; ?>     </td>
            <td><?php      echo "".$aux["cpf"]." ";   ?>         </td>
            <td><?php      echo "".$aux["rg"]." ";   ?>          </td>
            <td><?php      echo "".$aux["endereco"]." ";   ?>    </td>
            <td><?php      echo "".$aux["cidade"]." ";   ?>      </td>
            <td><?php      echo "".$aux["estado"]." ";   ?>      </td>
            <td><?php      echo "".$aux["cep"]." ";   ?>         </td>
            <td><?php      echo "".$aux["sexo"]." ";   ?>        </td>
            <td><?php      echo "".$aux["estadocivil"]." "; ?>   </td>
            <td><?php      echo "".$aux["email"]." ";   ?>       </td>
            <td><?php      echo "".$aux["telefone"]." ";   ?>    </td>
            <td><?php      echo "".$aux["celular"]." ";   ?>     </td>
            <td><?php      echo "".$aux["residencial"]." "; ?>   </td> 
            
           
                 <td>  <input type = "submit" value = " Deletar" name = "del" /> </td>
          
        </tr>
     <?php }?>
</table>
</form>
</body>






