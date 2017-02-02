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
    $noticia_destaque = array_shift($noticias);
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
                        <li>
                            <a href="#">
                                <img width="100%" src="imagens/noticias/mini_meirelles.jpeg">
                            </a>
                            <small>RECUPERAÇÃO ECONÔMICA</small>
                            <h4><a href="#">Brasil sairá da recessão ainda no 1° trimestre, afirma ministro</a></h4>
                            <p><a href="#">A investidores, Meirelles listou medidas para que País "volte a crescer com taxas mais elevadas"</a></p>
                        </li>
                        <li>
                            <a href="#">
                                <img width="100%" src="imagens/noticias/mini_exportacoes.jpeg">
                            </a>
                            <small>COMÉRCIO</small>
                            <h4><a href="#">Balança de janeiro tem o maior superávit dos últimos 11 anos</a></h4>
                            <p><a href="#">Exportações somaram US$ 14,91 bilhões e a importações chegaram a US$ 12,18 bilhões</a></p>
                        </li>
                        <li>
                            <a href="#">
                                <img width="100%" src="imagens/noticias/mini_petrobras.jpeg" class="right">
                            </a>
                            <small>PETRÓLEO</small>
                            <h4><a href="#">Ajuste de investimentos não reduzirá produção da Petrobras</a></h4>
                            <p><a href="#">Presidente da estatal afirmou que empresa deve atingir meta sem prejudicar população</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/rodape.php"; ?>