<br>
<div class="containerform">
    <div class="contact-info">
        <h1>Contate-Nos</h1>
        <p class="titleform">Adoramos criar doces incríveis para adoçar seu dia!<br></p>
        <p>Para fazer um pedido ou tirar dúvidas, siga-nos no Instagram e entre em contato pelo Direct ou WhatsApp.
            <br>
            Se preferir, você também pode nos enviar uma mensagem pelo formulário ao lado. Vamos adorar conversar com você!
        </p>
        <br>
        <div class="social-media">
            <p class="titleform">SIGA-NOS E ENTRE EM CONTATO!</p>
            <a href="https://www.instagram.com/cariocasweeties_/"><img src="img/icons/icon insta.png" alt="Instagram"></a>
            <a href="https://api.whatsapp.com/send?phone=5521975755302"><img src="img/icons/icon whats.png" alt="WhatsApp"></a>
        </div>
    </div>

    <div class="contact-form">
        <h3>Formulário de contato</h3>
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar"/> 
            <br>
            <div class="row mb-3">
                <label for="nome" class="col-form-label col-3 text-end">Nome:</label>
                <div class="col-7">
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-form-label col-3 text-end">E-mail:</label>
                <div class="col-7">
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="mensagem" class="col-form-label col-3 text-end">Mensagem:</label>
                <div class="col-7">
                    <input class="form-control" type="text" name="mensagem" id="mensagem" required>
                </div>
            </div>
            <div class="row ms-0 mb-3 mt-3">
                <div class="text-center">
                    <button class="btn btn-primary me-2" type="submit">Enviar</button>
                    <button class="btn btn-danger" type="reset">Limpar</button>
                </div>
            </div>
            <hr>
            <p>Dúvidas? Ou feedback? Fale conosco! <br> 
                Tem alguma pergunta ou quer saber mais sobre nossos doces? Envie sua mensagem!
            </p>
            <p id="mensagemConfirmacao" style="color: rgb(146, 28, 28); display: none;">Sua mensagem foi enviada com sucesso! Obrigado por entrar em contato.</p>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#nome").change(function () {
            $(this).val($(this).val().toUpperCase());
        });

        $("form").submit(function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            // Aqui você pode fazer a lógica de envio, como AJAX
            $("#mensagemConfirmacao").show(); // Mostra a mensagem de confirmação
            this.reset(); // Reseta o formulário
        });
    });
</script>
