	
	<form name="meu_form" action="./crud/inserir.php" method="post">
 
        <h2>Adicionar  - novo usuario</h2>
    
        <p class="nome">
                <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="Nome usuario" required="required" name="nome" />
         
        </p>
        <p class="fone">
                <label for="fone">E-mail</label>
            <input type="text" id="email" placeholder="E-mail" name="email" />
            
    
        </p>
         <p>
                <label for="email">Nivel</label>
            <input type="key" id="Nivel" placeholder="Nivel" name="cod_nivel" />
            
        </p>
        
        <p>
                <label for="email">Senha</label>
            <input type="key" id="senha" placeholder="Senha" name="senha" />
            
        </p>
        
        <p>
                <label for="email">Senha</label>
            <input type="key" id="r_senha" placeholder="Senha" name="r_senha" />
            
        </p>
        
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="Cadastrar" />
        </p>
    
    </form>


    
    <script>
            function Enviar() {
             
             var senha = parseInt(document.getElementById('senha').text);
             var r_senha = parseInt(document.getElementById('r_senha'.text);
             

             if (senha.text != r_senha.text) {
                 alert('Senhas Diferentes');
             }
            
            }
                </script>