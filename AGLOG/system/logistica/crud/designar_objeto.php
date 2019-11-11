<?php


include "../../../config/connection.php";

$cod_lote = $_POST["cod_lote"];
$cod_objeto = $_POST["cod_objeto"];




	
$sql = "INSERT INTO objeto_lote VALUES('0','$cod_objeto','$cod_lote','0')";

$sql2 = "UPDATE objeto SET status='1'  WHERE cod_objeto = '$cod_objeto' ";

//echo $sql ;

$res = mysqli_query($con,$sql);


$res2 = mysqli_query($con,$sql2);




if(mysqli_affected_rows($con)) {
  echo "<script>alert('Inserção realizada com sucesso...');</script>";
  echo "<script>location.href='../../logistica/index.php?pg=designa_objeto';</script>";
}
else echo "Erro ao inserir os dados:".mysqli_error($con);
	echo "<script>location.href='../../logistica/index.php?pg=designa_objeto';</script>";

	
	
   






?>