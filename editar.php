<?php 
$id = intval($_REQUEST["id"]);
$sql = "SELECT * FROM sugestao WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $exibirRegistros = $result->fetch_array(MYSQLI_ASSOC);
    $id = $exibirRegistros['id'];
    $nome = $exibirRegistros['nome'];
    $email = $exibirRegistros['email'];
    $mensagem = $exibirRegistros['mensagem'];
} else {
    // Lide com o caso em que não há resultados
    echo "Registro não encontrado.";
    exit;
}

$stmt->close();
?>

<div class="contact-form">
    <h3>Formulário de contato</h3>
    <br>
    <form action="?page=salvar" method="POST" class="container" id="contactForm">
        <input type="hidden" name="acao" value="editar"/>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>" />

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome" required value="<?php echo htmlspecialchars($nome); ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite um endereço de email válido" required value="<?php echo htmlspecialchars($email); ?>">
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem" required><?php echo htmlspecialchars($mensagem); ?></textarea>
        </div>

        <div class="row mt-3">
            <div>
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </div>
        </div>
    </form>
    <hr>

    <p>Dúvidas? Ou feedback? Fale conosco! <br> 
        Tem alguma pergunta ou quer saber mais sobre nossos doces?
        Envie sua mensagem!
    </p>

    <p id="mensagemConfirmacao" style="color: rgb(146, 28, 28); display: none;">Sua mensagem foi enviada com sucesso! Obrigado por entrar em contato.</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $("#nome").change(function() {
            $(this).val($(this).val().toUpperCase());
        });
    });
</script>
