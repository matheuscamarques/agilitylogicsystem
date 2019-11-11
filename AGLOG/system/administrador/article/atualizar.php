<form name="meu_form" action="./crud/atualizar.php" method="post">
 
        <h2>Adicionar  - novo usuario</h2>
        
        <p class="nome">
                <label for="nome">Cod_usuario:</label>
            <input type="number" id="nome" placeholder="Codigo Usuario" required="required" name="cod_usuario" />
         
        </p>
    
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
            <input type="submit" onclick="Enviar();" value="Atualizar" />
        </p>
    
    </form>