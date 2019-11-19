<form name="meu_form">
 
        <h2>Simulaçao de Valores - <br>Taxa atual é de 0,3</h2>
    
        <p class="nome">
                <label for="nome">Tamanho:</label>
            <input type="number" id="tamanho" placeholder="Metro cubico" required="required" name="nome" />
         
        </p>
        <p class="fone">
                <label for="fone">Distancia</label>
            <input type="number" id="distancia" placeholder="Km" name="fone" />
            
    
        </p>
        <p>
                <label for="email">Peso</label>
            <input type="number" id="peso" placeholder="Kg" name="email" />
            
        </p>
        
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="Calcular" />
        </p>
    
    </form>


    
    <script>
            function Enviar() {
             
             var peso = parseInt(document.getElementById('peso').value);
             var tamanho = parseInt(document.getElementById('tamanho').value);
             var distancia = parseInt(document.getElementById('distancia').value);
             var taxa = 0.3;
                var valor = (peso * taxa *tamanho*taxa *distancia*taxa)/taxa+taxa+taxa;

             if (peso.value != "") {
                 alert('Valor aproximado do Frete é de ' + Math.round(valor) + 'R$ Obrigado');
             }
            
            }
                </script>