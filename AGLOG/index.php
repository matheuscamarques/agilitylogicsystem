<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>

<div class="login">
<form name="meu_form" action="./crud/redireciona.php" method="post">
 
        <h2>AGLOG</h2>
    
        
        <p class="fone">
                <label for="fone">E-mail</label>
                <input type="text" id="senha" placeholder="E-mail" name="email" />
        </p>
            
        <p class="senha">
            	<label for="nome">Senha:</label>
            	<input type="password" id="senha" placeholder="senha" required="required" name="senha" />
         
        </p>
            
        
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="LOGIN" />
       
     
        		
            <input type="search" onclick="redireciona();" value="CLIENTE" />
        </p>
    
    </form>

</div>


<script type="text/javascript" >

function redireciona(){
	
	location.href='./cliente/';
	
}

</script>

</html>