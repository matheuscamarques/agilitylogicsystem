<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.php";
   $pagina["cadastra_lote"]="article/cadastra_lote.php";   
   $pagina["designa_objeto"]="article/designa_objeto.php";
  // $pagina["atualizar"]="article/atualizar.html";
   $pagina["pesquisar"]="article/pesquisar_lote.php";
	$pagina["atualiza_localizacao"]="article/atualiza_localizacao.php";
   
  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
  <a href="index.php?pg=cadastra_lote">CADASTRA LOTE</a>
  <a href="index.php?pg=designa_objeto">DESIGNAR OBJETOS</a>
  <a href="index.php?pg=atualiza_localizacao">ATUALIZA LOCALIZACAO</a>

  <a href="index.php?pg=pesquisar">pesquisar</a>
  
