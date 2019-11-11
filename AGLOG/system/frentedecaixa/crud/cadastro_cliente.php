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





	
$sql = "INSERT INTO cadastro_cliente VALUES('$cpf','$email','$telefone','$nome')";

$sql2 =  "INSERT INTO endereco_cliente VALUES('$logradouro','$numero','$complemento','$bairro','$cidade','$estado','$cep','0','$cpf')";


$res = mysqli_query($con,$sql);



if(mysqli_affected_rows($con)){
	
	$res = mysqli_query($con,$sql2);
	
	
	if(mysqli_affected_rows($con)) {
  		 echo "<script>alert('Inserção realizada com sucesso...');</script>";
   	echo "<script>location.href='../../frentedecaixa/index.php?pg=adicionar_cliente';</script>";
		}
	else echo "Erro ao inserir os dados:".mysqli_error($con);
}

		






	
	
   






?>