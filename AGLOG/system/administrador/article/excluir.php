<form name="meu_form" action="./crud/excluir.php" method="post">
 
        <h2>Excluir Usuario</h2>
    
        <p class="nome">
                <label for="nome">Cod do usuario:</label>
            <input type="number" id="nome" placeholder="cod usuario" required="required" name="cod_usuario" />
         
        </p>
       
        
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="Excluir" />
        </p>
    
    </form>