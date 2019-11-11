<?php


include "../../../config/connection.php";


$cod_usuario=$_POST["cod_usuario"];




	
$sql = "DELETE FROM usuario WHERE cod_usuario = '$cod_usuario'";

$res = mysqli_query($con,$sql);


if(mysqli_affected_rows($con)) {
   echo "Excluir realizada com sucesso...";
}
else echo "Erro ao excluir os dados:".mysqli_error($con);

	
	







?>