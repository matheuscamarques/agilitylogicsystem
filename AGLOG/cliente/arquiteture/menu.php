<?php
  @ $pg = $_GET["pg"];

   $pagina["home"]="article/home.php";
   $pagina["sobre"]="article/sobre.php";   
   $pagina["contato"]="article/contato.php";
   $pagina["localizacao"]="article/localizacao.php";
   $pagina["rastreio"]="article/rastreio.php";
   $pagina["basedecalculos"]="article/basecalculo.php";
  

   if(empty($pg)) $pg="home"; /* empty = verifica o conteudo da variavel, se esta vazio ou nao */    
?>


<a href="index.php?pg=home" >Home</a>
  <a href="index.php?pg=sobre">SOBRE</a>
  <a href="index.php?pg=contato">CONTATO</a>
  <a href="index.php?pg=localizacao">LOCALIZAÇÃO</a>
  <a href="index.php?pg=rastreio">RaSTREIO OBJETO</a>
  <a href="index.php?pg=basedecalculos">BASE DE CALCULOS</a>
