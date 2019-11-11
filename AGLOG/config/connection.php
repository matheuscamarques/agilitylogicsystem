
<?php

   $servidor = "10.132.236.250";
   $usuario = "aluno"; 
   $senha = "aluno"; 
   $banco = "aglog";
   
   $con = mysqli_connect($servidor,$usuario,$senha,$banco);
   if(!$con) {
   	echo "Erro ao conectar no Mysql : ".mysqli_error();
   }
   // echo "ConexÃ£o realizada com sucesso!!!";
   
?>
