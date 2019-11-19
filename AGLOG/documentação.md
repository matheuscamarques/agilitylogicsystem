Autor: Matheus de Camargo Marques

O sistema web feito em PHP faz inserções , alterações e pesquisas no banco de dados Mysql. Aqui nesse documento deixo demonstrações das príncipais fuinções do sistema e como elas funcionam.

# Aquivos de Arquiteture

Arquiteture/header.php
```php
    <html>
    <head>
    <script type=”text/javascript”> </script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>



    <body>

    <header>
    <h1>AGLOG</h1><p> Agility Logistics System</p> 
    </header>
    
    <menu><?php include "menu.php"?></menu>
```

Nesse trecho de código deixamos o header do html, mas para frente entenderemos a lógica por separa dessa maneira o código.

Arquiteture/footer.php
```php
     <footer></footer>    
       
    </body>
</html>
```
Nesse trecho deixamos o rodapé da página.

Arquiteture/menu.php
```php
<?php
   @$pg = $_GET["pg"];
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
```
Nesse trecho temos o comportamento do Menu do sistema , ele é genérico ou seja aplico ele em todas as outras páginas assim como o header.php e o footer.php

/index.php
```php
<?php 
  session_start();
  if((@$_SESSION['verificador']) == 1 )
  {
    //Acesso Garantido
    //FIX-ME
  } 
  else {
	  session_destroy();
	  echo  "<script>alert('Acesso Inválido você será redirecionado.');</script>";
	  echo  "<script>window.location=' ./../../../AGLOG/index.php';</script>";
	}
?>

<?php include "arquiteture/header.php" ?>

<article> <?php include($pagina[$pg]); ?> </article>

<?php include "arquiteture/footer.php" ?>
```



```php
```
Nesse trecho de index padrão em todo o sistema podemos ver o uso de includes dos cabeçalhos rodapés e menus do sistema.
