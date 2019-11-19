# Colégio Estadual Professora Maria Aguiar Teixeira

## Documentação do Sistema AGLOG como crítério avaliativo na disciplina de programação.
Autores: 
1. Matheus de Camargo Marques
2. Anderson Fagundes 

O sistema web feito em PHP faz inserções , alterações e pesquisas no banco de dados Mysql. Aqui nesse documento deixo demonstrações das príncipais funções do sistema e como elas funcionam. Busquei os arquivos que são os mais genéricos assim quando se deparar com algo parecido esse documento vai te auxiliar de forma mais geral.

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

Nesse trecho de index padrão em todo o sistema podemos ver o uso de includes dos cabeçalhos rodapés e menus do sistema. Percebemos que o código do index ficou bem reduzido , podemos reduzir mais ainda se desejarmos , basta fazermos um acesso a página de forma externa, será corrigido em futuras implementações.

Index.php Ideal
```php
<?php include "arquiteture/acesso_restrito.php" ?>
<?php include "arquiteture/header.php" ?>
<article> <?php include($pagina[$pg]); ?> </article>
<?php include "arquiteture/footer.php" ?>
```
Mais limpo não acham ?

redireciona.php
```php
<?php 
	//FIXME
	session_start();
			
	$login = $_POST['email'] ;
	$senha = $_POST['senha'] ;		
	$usuarios =array("admin@aglog.com","motorista@aglog.com","frentecaixa@aglog.com","logistica@aglog.com");
	$senhas =  array("admin", "motorista", "frente", "logistica");
					
	if($login == $usuarios[0] && $senha == $senhas[0]){
		//Administrador
		$_SESSION['verificador']=1;	
		echo "<h2>Administrador";
		echo "<script>location.href='../system/administrador';</script>";					
	}	
	else if($login == $usuarios[1] && $senha == $senhas[1] ){
		//Motorista
		$_SESSION['verificador']=4;
		echo "<h2>Motorista";
		echo "<script>location.href='../system/motorista';</script>";			
	}
	else if($login == $usuarios[2] && $senha == $senhas[2]){
		//Frente de Caixa
		$_SESSION['verificador']=3;
		echo "<h2>Frente de Caixa";
		echo "<script>location.href='../system/frentedecaixa/';</script>";			
	}
	else if($login == $usuarios[3] && $senha == $senhas[3] ){
		//Logística
		$_SESSION['verificador']=2;
		echo "<h2>Logistica";
		echo "<script>location.href='../system/logistica/';</script>";			
	}
	else{
		$_SESSION['verificador']=0;
		echo "<h2>Cliente</h2>";
		echo "<script>location.href='../cliente/';</script>";						
	}
								 
?>
```
O arquivo redireciona.php é responsável pelos logins no Sistema, esse método de login foi feita de forma intuitiva a implementação de um login mais complexo, fica como implemantações futuras. Mas acredito que a ideia por de trás do login é a mesma que fiz por intuição.

Abaixo deixo exemplos do Crud , deixo apenas um exemplo pois em outras páginas apesar do nome ser diferente a ideia são as mesmas. Alterar , Pesquisar , Exluir e Pesquisar. 

atualizar.php
```php
<?php
	include "../../../config/connection.php";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cod_nivel=$_POST["cod_nivel"];
	$senha = $_POST["senha"]; 	
	$r_senha = $_POST["r_senha"];
	$cod_usuario = $_POST["cod_usuario"];
	
	if($senha != $r_senha )
	{
		echo 'Senhas não são iguais'; 
	}
	else{	
		$sql = "UPDATE usuario SET nome = '$nome' , email = '$email',senha = '$senha' ,cod_nivel = '$cod_nivel' WHERE 			cod_usuario = '$cod_usuario' ";
		$res = mysqli_query($con,$sql);
		echo mysqli_error($con);
		
		if(mysqli_affected_rows($con)) {
   			echo "Atualização realizada com sucesso...";
  		        echo "<script>alert('Inserção realizada com sucesso...');</script>";
 			 // echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";
		}
			else echo "Erro ao atualizar os dados:".mysqli_error($con);
			//echo "<script>location.href='../../frentedecaixa/index.php?pg=atualizar_cliente';</script>";
	}
	
?>
```

Esse exemplo está relacionado a atualização de usuarios no sistema. 

excluir.php
```php
<?php
	include "../../../config/connection.php";
	$cod_usuario=$_POST["cod_usuario"];
	
	$sql = "DELETE FROM usuario WHERE cod_usuario = '$cod_usuario'";
	$res = mysqli_query($con,$sql);
		
	if(mysqli_affected_rows($con)) {
   		echo "Excluir realizada com sucesso...";
	}
	else echo "Erro ao excluir os dados:".mysqli_error($con);
		
?>
```

Como o próprio nome diz respeito a excluir determinada coisa do banco de dados , e nesse caso específico está relacionado a excluir um determinado usuário de sistema.

inserir.php
```php
<?php
	//FIXME
	include "../../../config/connection.php";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cod_nivel=$_POST["cod_nivel"];
	$senha = $_POST["senha"]; 
	$r_senha = $_POST["r_senha"];
	
	if($senha != $r_senha )
	{
		echo 'Senhas não são iguais'; 
	}
	else{	
		$sql = "INSERT INTO usuario VALUES(0,'$nome','$email','$senha','$cod_nivel')";
		$res = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con)){
   		echo "<script>alert('Inserção realizada com sucesso...');</script>";
   		echo "<script>location.href='../../administrador/index.php?pg=adicionar';</script>";
	}
		else echo "Erro ao inserir os dados:".mysqli_error($con);
	}
	
   
?>
```
Insere determinado usuário no sistema , vale resaltar aqui que é necessário implementar alguma criptografia pois a senha vem de forma literal o ideal é que seja codificada.

pesquisar.php
```php
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
   				 cho "<th>CODIGO NIVEL</th>";
   			echo  "</tr>";
  	 	echo "<tr>"
		 
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

```
De forma geral o pesquisar.php foi equivalente es todas as pesquisas do sistema. Execeto onde havia necessidades de uso de INNER Joins.

# Implementações Futuras

1. Login a partir de dados do Banco de dados.
2. Criptografia de senhas.
3. Compactação dos arquivos.
4. Remodelar o Sistema para Javascript.
