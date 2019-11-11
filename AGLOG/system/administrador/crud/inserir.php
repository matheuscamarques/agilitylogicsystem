<?php


include "../../../config/connection.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cod_nivel=$_POST["cod_nivel"];
$senha = $_POST["senha"]; 
$r_senha = $_POST["r_senha"];

if($senha != $r_senha )
{
	echo 'Senhas não são iguais'; 

}

else {

	
$sql = "INSERT INTO usuario VALUES(0,'$nome','$email','$senha','$cod_nivel')";

$res = mysqli_query($con,$sql);


if(mysqli_affected_rows($con)) {
   echo "<script>alert('Inserção realizada com sucesso...');</script>";
   echo "<script>location.href='../../administrador/index.php?pg=adicionar';</script>";
}
else echo "Erro ao inserir os dados:".mysqli_error($con);

	}
	
   






?>