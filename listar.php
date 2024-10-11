<h2 class="fw-light text-center mt-3">Sugestões:</h2>
<hr>
<div class="container">
<a href="?page=cadastrar">
    <button class="btn btn-primary" type="button">Nova sugestão</button>
</a>
</div>
<?php
    // Consulta SQL
    $sql = "SELECT * FROM sugestao";
    $result = $conn->query($sql);
 
    // Verifique se a consulta foi executada com sucesso
    if ($result === false) {
        die("Erro na consulta: " . $conn->error);
    }
 
    // Verifique o número de linhas retornadas
    $qtd = $result->num_rows;
 
    if ($qtd > 0) {
        echo "<div class='container'>";
        echo "<table class='table table-bordered m-2 p-2'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
        echo "<th>Mensagem</th>";
        echo "<th class='flex'>#</th>";
        echo "</tr>";
        while($exibirRegistros = mysqli_fetch_array($result)) {
            $id = $exibirRegistros[0];
            $nome = $exibirRegistros[1];
            $email = $exibirRegistros[2];
            $mensagem = $exibirRegistros[3];
           
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$mensagem</td>";
            echo "<td class='flex'>";
            echo "<button class='btn' onclick=\"location.href='?page=editar&id=".$id."';\"><i class='bi-pencil-square'></i></button>";
            echo "<button class='btn' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$id."';}else{false;}\"><i class='bi-trash3'></i></button>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";

    } else {
        echo "<p class='alert alert-danger m-2 p-2'>Não encontrou resultados!</p>";
    }
 
     // Feche a conexão com o banco de dados
     $conn->close();