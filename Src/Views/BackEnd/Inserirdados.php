<?php
include_once("conexão.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$residencial = $_POST['residencial'];


$Inserir = "INSERT INTO cadastros (id, nome, sobrenome, cpf, rg, endereco, cidade, estado, cep, sexo, estadocivil, email, telefone, celular, residencial)
VALUES('$id', '$nome', '$sobrenome', '$cpf', '$rg', '$endereco', '$cidade', '$estado', '$cep', '$sexo', '$estadocivil', '$email', '$telefone', '$celular', '$residencial')";

        if(mysqli_query($Conexao, $Inserir))
            {
                echo "CADASTRADO!";
            }
        else
        {
            echo "ERROR AO CADASTRAR!";
        }


?>