<div class="estrutura-lateral">
    <ul class="menu-destaque">
        <li><a href="noticias.html">Últimas Notícias</a></li>
        <li><a href="planalto.html">Portal Planalto</a></li>
        <li><a href="estados.html">Navegue por Estados</a></li>
    </ul>
    <ul class="menu-estruturado">
        <li class="titulo">
            <h3>Assuntos</h3>
            <ul>
<?php
    // recebendo array de dados
    $assuntos = include 'dados/assuntos.php';

    // criando template html para facilitar impressão
    $html_li = '<li><a href="assunto.php?codigo=%s">%s</a></li>';

    // imprimindo (saída de dados dinâmicos)
    foreach ($assuntos as $codigo => $assunto) {
        printf($html_li, $codigo, $assunto);
    }
?>
            </ul>
        </li>
    </ul>
</div>