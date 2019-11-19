<?php


include "../../../config/connection.php";

$cod_objeto = @$_POST["cod_objeto"];
$sql = "SELECT *FROM objeto WHERE cod_objeto LIKE  '%$cod_objeto%' ";
$res = mysqli_query($con,$sql);



if ($res->num_rows > 0) {
    // output data of each row
   echo  "<table border='1'>";
   echo  "<tr>";
   echo "<th>CÓDIGO DO OBJETO</th>";
   echo "<th>TAMANHO</th>";
    echo "<th>DISTANCIA</th>";
    echo "<th>PESO</th>";
   echo "<th>COD TAXA</th>";
   echo "<th>CPF REMETENTE</th>";
   echo "<th>CPF RECEBIDOR</th>";
   echo "<th>PREÇO</th>";
   echo  "</tr>";
   echo "<tr>";
   
  
           
          
    while($row = $res->fetch_assoc()) {

        echo  "<td>".$row["cod_objeto"]."</td>";
        echo "<td>".$row["tamanho"]."</td>";
        echo "<td>".$row["distancia"]."</td>";
         echo "<td>".$row["peso"]."</td>";
        echo "<td>".$row["cod_taxa"]."</td>";
    	echo "<td>".$row["cpf_origem"]."</td>";
    	echo "<td>".$row["cpf_destino"]."</td>";
    	echo "<td>".$row["preco"]."</td>";
    
    
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




	

