
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<?php 

			session_start();
			
			$login = $_POST['email'] ;
			$senha = $_POST['senha'] ;
			
			
			$usuarios =  array("admin@aglog.com", "motorista@aglog.com", "frentecaixa@aglog.com", "logistica@aglog.com");
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