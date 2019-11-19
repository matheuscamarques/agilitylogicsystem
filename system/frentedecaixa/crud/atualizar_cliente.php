<?php


include "../../../config/connection.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone =$_POST["telefone"];



//Endereço;

$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];


	
$sql = "UPDATE endereco_cliente SET logradouro='$logradouro' ,numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep' WHERE cpf = '$cpf' ";

$sql2 = "UPDATE cadastro_cliente SET email='$email',telefone='$telefone',nome='$nome'  WHERE cpf = '$cpf' ";
	
$res = mysqli_query($con,$sql);

	
		if(mysqli_affected_rows($con)){
		
	
		$res2 = mysqli_query($con,$sql2);

		if(mysqli_affected_rows($con)) {
   	echo "Atualização realizada com sucesso...";
   	echo "<script>alert('Atualização realizada com sucesso...');</script>";
   	echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";
		}
		else echo "Erro ao atualizar os dados:".mysqli_error($con);
		 echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";

		}






	







?>