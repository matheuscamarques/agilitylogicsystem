<?php


include "../../../config/connection.php";

$cod_lote = @$_POST["cod_lote"];
//$sql = "SELECT *FROM objeto_lote WHERE cod_lote LIKE  '%$cod_lote%' ";


$sql = "SELECT ol.cod_lote, ol.cod_objeto ,ol.status, ec.cep AS cep1, ed.cep AS cep2
		FROM objeto_lote ol
		INNER JOIN objeto o USING(cod_objeto)
		INNER JOIN endereco_cliente ec ON (ec.cpf = o.cpf_origem)
		INNER JOIN endereco_cliente ed ON (ed.cpf = o.cpf_destino)
		WHERE ol.cod_lote = '$cod_lote' "; 



$res = mysqli_query($con,$sql);



if ($res->num_rows > 0) {
    // output data of each row
   echo  "<table border='1'>";
   echo  "<tr>";
   echo "<th>CÓDIGO DO OBJETO</th>";
   echo "<th>CÓDIGO LOTE</th>";
   echo "<th>STATUS</th>";
   echo "<th>ORIGEM</th>";
   echo "<th>DESTINO</th>";
    
  
   echo  "</tr>";
   echo "<tr>";
   
  
           
          
    while($row = $res->fetch_assoc()) {

        echo  "<td>".$row["cod_objeto"]."</td>";
        echo "<td>".$row["cod_lote"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>".$row["cep1"]."</td>";
        echo "<td>".$row["cep2"]."</td>";
         
    
    
        echo "</tr>";
        echo "<tr>";
    }

    
    echo "<tr>";
    
    echo "</table>";
} else {
    echo "0 results";
}
$con->close();



?>




	

