<?php

    $nome = addslashes($_POST['nome']);
    $tel = addslashes($_POST['tel']);
    $email = addslashes($_POST['email']);
    $text = addslashes($_POST['text']);

    $para = "marua.silva@gmail.com";
    $assunto = "Contato - Dra. Êmili Mendes";

    $corpo = "Nome: ".$nome."\n"."Tel: ".$tel."\n"."Email: ".$email."\n"."Text: ".$text;

    $cabeca = "From: emilifisioo@outlook.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo ("Email enviado com sucesso");
    }else{
        echo ("Houve um erro ao enviar o email!");
    }
?>