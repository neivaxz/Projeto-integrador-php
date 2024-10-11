<main class="container">
    <h1 class="title">As mais vendidas</h1>
    <br>
    <h2 class="text"><strong>Coxinhas de morango</strong></h2>
    <div id="carouselExampleAutoplaying" class="carousel slide carrossel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/coxinhademorango.JPG" class="d-block w-100" alt="Coxinha de morango" style="object-fit: cover; height: 600px;">
            </div>
            <div class="carousel-item">
                <img src="img/coxinhadeamendoim.JPG" class="d-block w-100" alt="Coxinha de amendoim" style="object-fit: cover; height: 600px;">
            </div>
            <div class="carousel-item">
                <img src="img/coxinhadeninho.JPG" class="d-block w-100" alt="Coxinha de ninho" style="object-fit: cover; height: 600px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="space row">
        <h2 class="subTitle">Outros doces</h2>
        <?php
            // Definição do array de produtos
            $produtos = [
                ['src' => 'img/home img/palhaitalianahome.jpeg', 'nome' => 'Palha Italiana', 'link' => 'palhaItaliana.php'],
                ['src' => 'img/home img/tortadekitkathome.JPG', 'nome' => 'Torta de KitKat', 'link' => 'tortas.php'],
                ['src' => 'img/home img/tortadelimaohome.jpg', 'nome' => 'Torta de Limão', 'link' => 'tortas.php'],
                ['src' => 'img/home img/banoffe.home.jpg', 'nome' => 'Banoffe', 'link' => 'banoffeEbombomaberto.php'],
            ];

            // Loop para gerar os cards dinamicamente
            foreach ($produtos as $produto) {
                echo '<div class="col-12 col-lg-3 col-md-4 col-sm-6 custom-card">';
                echo '    <div class="card">';
                echo '        <img class="card-img-top imagemProduto" src="' . htmlspecialchars($produto['src']) . '" alt="' . htmlspecialchars($produto['nome']) . '">';
                echo '        <div class="card-body">';
                echo '            <h3 class="titleSecond text-center">' . htmlspecialchars($produto['nome']) . '</h3>';
                echo '            <p class="card-text"><small class="text-muted">Atualizados recentemente</small></p>';
                echo '            <a href="' . htmlspecialchars($produto['link']) . '" class="btn btn-primary">Clique aqui</a>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        ?>
        
        <p id="totalProdutos">Encontrados: <?php echo count($produtos); ?></p>
    </div>
</main>
