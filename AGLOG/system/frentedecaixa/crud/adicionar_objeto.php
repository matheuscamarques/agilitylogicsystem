<?php


include "../../../config/connection.php";

$cpf_rem = $_POST["cpf_rem"];
$cpf_rec = $_POST["cpf_rec"];
$tam = $_POST["dimensao"];
$peso = $_POST["peso"];
$dist = $_POST["distancia"];
$cod_taxa = $_POST["cod_taxa"];

$taxa1 ="SELECT taxa from taxas WHERE cod_taxa=$cod_taxa";
$res1 = mysqli_query($con,$taxa1);

$taxa = 0;
if(mysqli_num_rows($res1) > 0){
	while($resultado = mysqli_fetch_assoc($res1)){
   	$taxa = $resultado["taxa"];
	}
	
	$valor = ( $peso*$taxa + $dist*$taxa + $tam*$taxa)/($taxa+$taxa+$taxa);
	
	$sql = "INSERT INTO objeto VALUES('0','$tam','$dist','$valor','$cod_taxa','$cpf_rem','$cpf_rec','$peso','0')";

	//echo $sql;
	$res = mysqli_query($con,$sql);

	if(mysqli_affected_rows($con)) {
   	echo "<script>alert('Inserção realizada com sucesso...');</script>";
  		echo "<script>location.href='../../frentedecaixa/index.php?pg=adicionar_objeto';</script>";
	}
	else echo "Erro ao inserir os dados:".mysqli_error($con);
	
	echo "<script>location.href='../../frentedecaixa/index.php?pg=adicionar_objeto';</script>";
} 


	
	
   






?>