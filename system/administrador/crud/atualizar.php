<?php


include "../../../config/connection.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cod_nivel=$_POST["cod_nivel"];
$senha = $_POST["senha"]; 
$r_senha = $_POST["r_senha"];
$cod_usuario = $_POST["cod_usuario"];

if($senha != $r_senha )
{
	echo 'Senhas não são iguais'; 

}

else {

	

	
$sql = "UPDATE usuario SET nome = '$nome' , email = '$email',senha = '$senha' ,cod_nivel = '$cod_nivel' WHERE cod_usuario = '$cod_usuario' ";

$res = mysqli_query($con,$sql);
echo mysqli_error($con);


if(mysqli_affected_rows($con)) {
   echo "Atualização realizada com sucesso...";
   echo "<script>alert('Inserção realizada com sucesso...');</script>";
  // echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";
}
else echo "Erro ao atualizar os dados:".mysqli_error($con);
	//echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";
	}
	







?>