<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.php";
   $pagina["adicionar"]="article/adicionar.php";   
   $pagina["excluir"]="article/excluir.php";
   $pagina["atualizar"]="article/atualizar.php";
   $pagina["pesquisar"]="article/pesquisar.php";
   
  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
  <a href="index.php?pg=adicionar">ADICIONAR</a>
  <a href="index.php?pg=excluir">EXCLUIR</a>
  <a href="index.php?pg=atualizar">ATUALIZAR</a>
  <a href="index.php?pg=pesquisar">pesquisar</a>
  
