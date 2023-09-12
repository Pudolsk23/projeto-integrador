<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_empresa = $_POST["company_name"];
    $email_contato = $_POST["contact_email"];
    $descricao_empresa = $_POST["company_description"];

    $destinatario = "uberlandiafood@gmail.com"; 
    $assunto = "Formulário de Divulgação da Empresa";

    $mensagem = "Nome da Empresa: $nome_empresa\n";
    $mensagem .= "Email de Contato: $email_contato\n";
    $mensagem .= "Descrição da Empresa:\n$descricao_empresa";

    $headers = "From: $email_contato";

    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar o email.";
    }
}
?>
