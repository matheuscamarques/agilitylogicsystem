<?php


include "../../../config/connection.php";


$cpf = $_POST["cod_objeto"];


	
$sql = "DELETE FROM objeto WHERE cod_objeto ='$cpf'";




$res = mysqli_query($con,$sql);




if(mysqli_affected_rows($con)) {
   echo "<script>alert('Exclusão realizada com sucesso...');</script>";
   echo "<script>location.href='../../frentedecaixa/index.php?pg=excluir_objeto';</script>";
}
else echo "Erro ao excluir os dados:".mysqli_error($con);
	echo "<script>location.href='../../frentedecaixa/index.php?pg=excluir_objeto';</script>";

	
	
   






?>