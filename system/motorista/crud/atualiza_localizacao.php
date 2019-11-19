<?php


include "../../../config/connection.php";

date_default_timezone_set('America/Sao_Paulo');

$cod_lote = $_POST["cep"];
$cod_objeto = $_POST["cod_objeto"];
$status = $_POST["status"];
$time = date('H:i:s');
$date = date('Y-m-d');




	
$sql = "INSERT INTO passos VALUES('0','$cod_objeto','$cod_lote','$time','$date','$status')";



echo $sql ;

$res = mysqli_query($con,$sql);



if(mysqli_affected_rows($con)) {
  echo "<script>alert('Inserção realizada com sucesso...');</script>";
  echo "<script>location.href='../../motorista/index.php?pg=atualiza_localizacao';</script>";
}
else
 echo "Erro ao inserir os dados:".mysqli_error($con);
	echo "<script>location.href='../../motorista/index.php?pg=atualiza_localizacao';</script>";

	
	
   






?>