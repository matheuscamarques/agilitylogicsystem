<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php


include "./../../config/connection.php";

$cod_objeto = @$_POST["cod_objeto"];
//$sql = "SELECT *FROM objeto_lote WHERE cod_lote LIKE  '%$cod_lote%' ";


$sql = "SELECT *FROM passos where cod_objeto='$cod_objeto' "; 



$res = mysqli_query($con,$sql);



if ($res->num_rows > 0) {
    // output data of each row
   echo  "<table border='1'>";
   echo  "<tr>";
   echo "<th>CEP</th>";
   echo "<th>HORA</th>";
   echo "<th>DATA</th>";
    echo "<th>STATUS</th>";
   
    
  
   echo  "</tr>";
   echo "<tr>";
   
  
           
          
    while($row = $res->fetch_assoc()) {

        echo  "<td>".$row["cep"]."</td>";
        echo "<td>".$row["hora"]."</td>";
        echo "<td>".$row["data"]."</td>";
        echo "<td>".$row["status"]."</td>";
  
         
    
    
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




	

