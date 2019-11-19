<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.php";
   $pagina["finaliza_entrega"]="article/finaliza_entrega.php";   
   $pagina["finaliza_lote"]="article/finaliza_lote.php";
   $pagina["atualiza_localizacao"]="article/atualiza_localizacao.php";
   $pagina["pesquisar_lote"]="article/pesquisa_lote.php";
  $pagina["pesquisar_objetos"]="article/pesquisa_objeto.php";
   
  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
  <a href="index.php?pg=finaliza_entrega">FINALIZA entrega</a>
  <a href="index.php?pg=finaliza_lote">FINALIZAR LOTE</a>
  <a href="index.php?pg=atualiza_localizacao">ATUALIZAR LOCALIZAÇÃO</a>
  <a href="index.php?pg=pesquisar_lote">PESQUISAR LOTE</a>
  <a href="index.php?pg=pesquisar_objetos">PESQUISAR OBJETOS</a>
  
