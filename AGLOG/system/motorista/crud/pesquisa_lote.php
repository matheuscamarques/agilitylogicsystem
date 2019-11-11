<?php


include "../../../config/connection.php";

$cod_motorista = @$_POST["cod_motorista"];
//$sql = "SELECT *FROM objeto_lote WHERE cod_lote LIKE  '%$cod_lote%' ";


$sql = "SELECT *FROM lote where cod_usuario='$cod_motorista'"; 



$res = mysqli_query($con,$sql);



if ($res->num_rows > 0) {
    // output data of each row
   echo  "<table border='1'>";
   echo  "<tr>";
   
   echo "<th>CODIGO LOTE</th>"; 
   echo  "</tr>";
   echo "<tr>";
   
  
           
          
    while($row = $res->fetch_assoc()) {

        
        echo "<td>".$row["cod_lote"]."</td>";  
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




	

