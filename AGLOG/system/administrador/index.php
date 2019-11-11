<?php 

session_start();
if((@$_SESSION['verificador']) == 1 )
{
 	
 
  }
  
else {
	session_destroy();
	echo  "<script>alert('Acesso Inválido você será redirecionado.');</script>";
	echo  "<script>window.location=' ./../../../AGLOG/index.php';</script>";
	}


?>

<?php include "arquiteture/header.php" ?>

<article>

        <?php
               include($pagina[$pg]);                      
        ?>

</article>

<?php include "arquiteture/footer.php" ?>