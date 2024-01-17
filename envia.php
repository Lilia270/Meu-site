<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente = $_POST['nome'];
$emaildestinatario = 'lilirosaaestudos@gmail.com';// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
Formulario de Contato
Nome completo e idade:'.$nomeremetente.' 
Email: '.$email.' 
Telefone: '.$telefone.' 
Mensagem: '.$mensagem.'';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nomeremetente\r\n";
// remetente
$headers .= "Return-Path: $emaildestinatario \r\n";
// return-path
$envio = mail($emaildestinatario, $nomeremetente, $mensagemHTML, $nomeremetente);
if($envio)
echo "<script>location.href='https://youtube.com'</script>";// Página que será redirecionada
?>