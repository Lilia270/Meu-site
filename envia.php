<?php


    if(isset($_POST['email']) && !empty($_POST['email'])) {


    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    }

    $para = "lilirosaaestudos@gmail.com";
    $assunto = "Emprego - site Lilia Rosa";

    $corpo = "Nome:".$nome."\r\n".
             "E-mail:".$email."\r\n" .
             "Telefone:". $telefone. "\r\n".
             "Mensagem" .$mensagem;
    
    $cabeca ="From: liliarosacoelho@gmail.com" . "\r\n"."Reply-to".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo, $cabeca)){
        echo("E-mail enviado!");

    }else{
        echo("Houve um erro ao enviar o email");
    }
?>