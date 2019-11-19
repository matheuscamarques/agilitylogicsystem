<form name="meu_form" action="./crud/email.php" method="post">
 
    <h2>Entre em contato</h2>

    <p class="nome">
            <label for="nome">Nome</label>
        <input type="text" id="nomeid" placeholder="Digite seu nome" required="required" name="nome" />
     
    </p>
    <p class="fone">
            <label for="fone">Fone-</label>
        <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
        

    </p>
    <p>
            <label for="email">Email</label>
        <input type="email" id="emailid" placeholder="seuemail@seuemail.com" name="email" />
        
    </p>
    <p>
       
        <textarea placeholder="Deixe sua mensagem" name="mensagem"></textarea>
    </p>
    <p class="submit">
        <input type="submit" onclick="Enviar();" value="Enviar" />
    </p>

</form>

<script>
function Enviar() {
 
 var nome = document.getElementById("nomeid");

 if (nome.value != "") {
     alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
 }

}
    </script>