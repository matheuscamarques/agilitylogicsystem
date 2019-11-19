<?php 
			date_default_timezone_set('America/Sao_Paulo');
			include "../../../config/connection.php";
			$cod_lote = $_POST['cod_lote'];
			$date = date('Y-m-d');
			
			$sql = "UPDATE lote SET status='1' , data_entrega='$date' WHERE cod_lote = '$cod_lote' ";

echo $sql ;

$res = mysqli_query($con,$sql);






if(mysqli_affected_rows($con)) {
 echo "<script>alert('Lote finalizado...');</script>";
 echo "<script>location.href='../../motorista/index.php?pg=finaliza_entrega';</script>";
}
else echo "Erro ao inserir os dados:".mysqli_error($con);
	echo "<script>location.href='../../motorista/index.php?pg=finaliza_entrega</script>";

?>