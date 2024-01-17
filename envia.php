<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "liliaestudos@gmail.com";
    $assunto = "Emprego - site Lilia Rosa";

    $corpo = "Nome:".$nome."\n"."E-mail:". $email."\n". "Telefone". $telefone. "\n". "Mensagem" .$mensagem;
    
    $cabeca ="From: liliarosacoelho@gmail.com" . "\n"."Reply-to".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo, $cabeca)){
        echo("E-mail enviado!");

    }else{
        echo("Houve um erro ao enviar o email");
    }
?>