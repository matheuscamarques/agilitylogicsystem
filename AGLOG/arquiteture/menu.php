<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.html";
   $pagina["sobre"]="article/sobre.html";   
   $pagina["contato"]="article/contato.html";
   $pagina["localizacao"]="article/localizacao.html";
   $pagina["rastreio"]="article/rastreio.html";
   $pagina["basedecalculos"]="article/basecalculo.html";
  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
  <a href="index.php?pg=sobre">SOBRE</a>
  <a href="index.php?pg=contato">CONTATO</a>
  <a href="index.php?pg=localizacao">LOCALIZAÇÃO</a>
  <a href="index.php?pg=rastreio">RaSTREIO OBJETO</a>
  <a href="index.php?pg=basedecalculos">BASE DE CALCULOS</a>
