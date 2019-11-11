<?php


include "../../../config/connection.php";


$cod_objeto = $_POST["cod_objeto"];


	
$sql = "DELETE FROM objeto WHERE cod_objeto ='$cod_objeto'";


$res = mysqli_query($con,$sql);



if(mysqli_affected_rows($con)) {
   echo "<script>alert('Exclusão realizada com sucesso...');</script>";
   echo "<script>location.href='../../frentedecaixa/index.php?pg=excluir_objeto';</script>";
}
else echo "Erro ao excluir os dados:".mysqli_error($con);
	echo "<script>location.href='../../frentedecaixa/index.php?pg=excluir_objeto';</script>";

	
	
   






?>