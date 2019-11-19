<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.php";
   $pagina["adicionar_cliente"]="article/adicionar_cliente.php";   
   $pagina["excluir_cliente"]="article/excluir_cliente.php";
   $pagina["pesquisar_cliente"]="article/pesquisar_cliente.php";
   $pagina["atualizar_cliente"]="article/atualizar_cliente.php";
   
   $pagina["adicionar_objeto"]="article/adicionar_objeto.php";   
   $pagina["excluir_objeto"]="article/excluir_objeto.php";
   $pagina["pesquisar_objeto"]="article/pesquisar_objeto.php";

  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
	
  <a href="index.php?pg=adicionar_cliente">ADICIONAR CLIENTE</a>
  <a href="index.php?pg=excluir_cliente">EXCLUIR CLIENTE</a>
  <a href="index.php?pg=atualizar_cliente">ATUALIZAR CLIENTE</a>
  <a href="index.php?pg=pesquisar_cliente">PESQUISAR CLIENTE</a>
  <br><br>
  <a href="index.php?pg=adicionar_objeto">ADICIONAR OBJETO</a>
  <a href="index.php?pg=excluir_objeto">EXCLUIR OBJETO</a>
  
  <a href="index.php?pg=pesquisar_objeto">PESQUISAR OBJETO</a>
  
