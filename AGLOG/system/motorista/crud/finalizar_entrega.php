<?php 
			include "../../../config/connection.php";
			$cod_objeto = $_POST['cod_objeto'];
			
			$sql = "UPDATE objeto SET status='2'  WHERE cod_objeto = '$cod_objeto' ";

//echo $sql ;

$res = mysqli_query($con,$sql);






if(mysqli_affected_rows($con)) {
  echo "<script>alert('Objeto entregue...');</script>";
  echo "<script>location.href='../../motorista/index.php?pg=finaliza_entrega';</script>";
}
else echo "Erro ao inserir os dados:".mysqli_error($con);
	echo "<script>location.href='../../motorista/index.php?pg=finaliza_entrega</script>";

?>