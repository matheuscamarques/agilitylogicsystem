<?php


include "./../../config/connection.php";

$nome = @$_POST["nome"];
$sql = "SELECT *FROM usuario WHERE nome LIKE  '%$nome%' ";
$res = mysqli_query($con,$sql);



if ($res->num_rows > 0) {
    // output data of each row
   echo  "<table border='1'>";
   echo  "<tr>";
   echo "<th>CÓDIGO DO USUARIO</th>";
   echo "<th>NOME USUARIO</th>";
    echo "<th>E-MAIL</th>";
   echo "<th>CODIGO NIVEL</th>";
   echo  "</tr>";
   echo "<tr>";
   
  
           
          
    while($row = $res->fetch_assoc()) {

        echo  "<td>".$row["cod_usuario"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["cod_nivel"]."</td>";
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




	

