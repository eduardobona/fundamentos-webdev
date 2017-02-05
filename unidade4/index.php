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
    // a noticia de destaque sempre será a primeira
    $noticia_destaque = $noticias[1];
?>

                    <h3><?php echo $assuntos[$noticia_destaque['assunto']] ?></h3>
                    <div class="noticia-chamada">
                        <a href="#"><img src="imagens/noticias/<?php echo $noticia_destaque['foto'] ?>" class="right"></a>
                        <small><?php echo $noticia_destaque['tema']?></small>
                        <h4><a href="#"><?php echo $noticia_destaque['titulo']?></a></h4>
                        <p><a href="#"><?php echo $noticia_destaque['subtitulo']?></a></p>
                    </div>
                </div>
                <div class="noticia-lista">
                    <ul>
<?php
    foreach ($noticias as $codigo => $noticia) {
        // a primeira não deve entrar na lista
        if ($codigo == 1) {
            continue;
        }
        $link = "noticia.php?codigo=" . $codigo;
?>
                        <li>
                            <a href="<?php echo $link ?>">
                                <img width="100%" src="imagens/noticias/<?php echo $noticia['foto'] ?>">
                            </a>
                            <small><?php echo $noticia['tema'] ?></small>
                            <h4><a href="<?php echo $link ?>"><?php echo $noticia['titulo']?></a></h4>
                            <p><a href="<?php echo $link ?>"><?php echo $noticia['subtitulo']?></a></p>
                        </li>
<?php
    }
?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/rodape.php"; ?>