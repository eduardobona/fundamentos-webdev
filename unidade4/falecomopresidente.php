<?php include "layout/cabecalho.php";  ?>

    <div class="corpo">

<?php include "layout/banner_principal.php";  ?>

        <div class="mapa-do-site">
            <ul>
                <li>VOCÊ ESTÁ AQUI:</li>
                <li><a href="index.php">PÁGINA PRINCIPAL</a></li>
                <li><a href="falecomopresidente.php">FALE COM O PRESIDENTE</a></li>
            </ul>
        </div>
        <div class="corpo-conteudo">

<?php include "layout/estrutura_lateral.php";  ?>

            <div class="conteudo">
                <h3>Fale com o Presidente</h3>

<?php
    if (isset($_GET["mensagem"]) and isset($_GET["css"])) {
        $format_mensagem = '<div class="mensagem %s">%s</div>';
        printf($format_mensagem, $_GET["css"], $_GET["mensagem"]);
    }
?>

                <div class="formulario">
                    <form action="falecomopresidente_enviar.php" method="POST">
                        <label for="nome">Qual seu nome?</label>
                        <input type="text" name="nome" required="required" autofocus />
                        <label for="email">Email para retorno:</label>
                        <input type="email" name="email" required="required" />
                        <label for="assunto">Classifique sua mensagem:</label>
                        <select name="assunto" name="assunto">
                            <option value="sugestão">Sugestão</option>
                            <option value="elogio">Elogio</option>
                            <option value="reclamação">Reclamação</option>
                            <option value="denúncia">Denúncia</option>
                        </select>
                        <label for="sexo">Sexo</label>
                        <input type="radio" name="sexo" value="masculino"> Masculino<br>
                        <input type="radio" name="sexo" value="feminino"> Feminino<br>
                        <label for="emails">Gostaria de receber emails sobre:</label>
                        <input type="checkbox" name="emails[]" value="economia"> Economia<br>
                        <input type="checkbox" name="emails[]" value="emprego"> Emprego<br>
                        <input type="checkbox" name="emails[]" value="saude"> Saúde<br>
                        <input type="checkbox" name="emails[]" value="educacao"> Educacação<br>
                        <label for="mensagem">Digite sua mensagem:</label>
                        <textarea name="mensagem" required="required"></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/rodape.php"; ?>