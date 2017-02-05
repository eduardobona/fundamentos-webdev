<?php include "layout/cabecalho.php";  ?>

    <div class="corpo">

<?php include "layout/banner_principal.php";  ?>

        <div class="mapa-do-site">
            <ul>
                <li>VOCÊ ESTÁ AQUI:</li>
                <li><a href="index.php">PÁGINA PRINCIPAL</a></li>
            </ul>
        </div>
        <div class="corpo-conteudo">

<?php include "layout/estrutura_lateral.php";  ?>

            <div class="conteudo">
                <div class="noticia-destaque">
<?php
    $assuntos = include 'dados/assuntos.php';
    $noticias = include 'dados/noticias.php';
    if (isset($_GET["codigo"])) {
        $codigo = $_GET["codigo"];
    } else {
        $codigo = -1;
    }

    if (array_key_exists($codigo, $noticias)) {
        $noticia_destaque = $noticias[$codigo];
?>

                    <h3><?php echo $assuntos[$noticia_destaque['assunto']] ?></h3>
                    <div class="noticia-chamada">
                        <h4><?php echo $noticia_destaque['titulo']?></h4>
                        <small><?php echo $noticia_destaque['tema']?></small>
                        <p><?php echo $noticia_destaque['subtitulo']?></p>
                    </div>
                    <div class="noticia-destaque-conteudo">
                        <img src="imagens/noticias/<?php echo $noticia_destaque['foto'] ?>">
                        <?php include "dados/noticias/noticia_$codigo.html"?>
                    </div>

<?php
    } else {
?>
        <div class="noticia-chamada">
            <h4>Não foi possível encontrar notícia</h4>
        </div>
<?php
    } // fim do if se notícia for encontrada
?>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/rodape.php"; ?>