<?php

    /**
     * Recebendo informações
     * Simples (sem validação ou tratamento)
     */
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $assunto = $_POST["assunto"];
    $sexo = $_POST["sexo"];
    $emails = $_POST["emails"];

    // validação simples de preenchimento
    if (
         $nome == "" or
         $email == "" or
         $mensagem == ""
    ) {
        // erro redireciona para página com mensagme de erro
        $mensagem = "Houve um erro com o envio. Tente novamente";
        $css = "erro";
        header("location: falecomopresidente.php?mensagem=$mensagem&css=$css");
        exit;
    }

    // criando mensagem
    $arquivo_mensagem = "Enviado por $nome com email $email";
    $arquivo_mensagem .= " com assunto $assunto do sexo $sexo";
    $arquivo_mensagem .= " e mensagem $mensagem.";
    $arquivo_mensagem .= " Gostaria de receber informações sobre ";
    $arquivo_mensagem .= implode(", ", $emails);
    $arquivo_mensagem .= "\n";

    // salvando mensagem em arquivo de texto
    file_put_contents("dados/falecomopresidente.txt", $arquivo_mensagem, FILE_APPEND);

    // retornando mensagem de sucesso e redirecioando página
    $mensagem = "Dados enviados com sucesso";
    $css = "sucesso";
    header("location: falecomopresidente.php?mensagem=$mensagem&css=$css");
    exit;

?>