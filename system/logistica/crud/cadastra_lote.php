<?php


include "../../../config/connection.php";

$cod_motorista = $_POST["cod_motorista"];




	
$sql = "INSERT INTO lote VALUES('0','$cod_motorista','0','0')";




$res = mysqli_query($con,$sql);




if(mysqli_affected_rows($con)) {
   echo "<script>alert('Inserção realizada com sucesso...');</script>";
  echo "<script>location.href='../../frentedecaixa/index.php?pg=adicionar_objeto';</script>";
}
else echo "Erro ao inserir os dados:".mysqli_error($con);
	echo "<script>location.href='../../frentedecaixa/index.php?pg=adicionar_objeto';</script>";

	
	
   






?>