<?php

    
    session_start();
    include_once("conexao.php");

    if(!empty($_POST['email']) || !empty($_POST['telefone'])){
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $assunto = addslashes($_POST['assunto']);
        $mensagem = addslashes($_POST['mensagem']);

        $result_usuario = "INSERT INTO `coneto`.`cadastro_usuario` (`nome`, `telefone`, `email`) VALUES ('$nome', '$telefone', '$email')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        $to = "coneto@coneto.kinghost.net";
        $subject = $assunto." - site";
        $body = ">>Sr(a)".$nome."\r\n"."telefone".$telefone."\r\n".$email."\r\n\n".$mensagem;
        $header = "From: coneto@coneto.kinghost.net"."\r\n"."Reply-To:".$email."\e\n"."X=Mailer:PHP/".phpversion();

        mail($to, $subject, $body, $header);

        if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "<p style='color: darkgreen; text-align: center; display: inline-box; width:350px; padding: 5px;
            background: rgb(150, 255, 150); border-radius: 10px; margin: 0 auto; margin-top:5px; margin-bottom: 5px;
            border-style: solid; border-width:2px; border-color:darkgreen;'>
            E-mail enviado com sucesso! </p>";
            header("Location: /contato.php");
        }else{
            $_SESSION['msg'] = "<p style='color: darkgred; text-align: center; display: inline-box; width:350px; padding: 5px;
            background: rgb(255, 105, 105); border-radius: 10px; margin: 0 auto; margin-top:5px; margin-bottom: 5px;
            border-style: solid; border-width:2px; border-color:darkgred;'>
            Erro! Por favor, tente novamente</p>";
            header("Location: /contato.php");
        }
    }
    else if(empty($_POST['email']) || empty($_POST['telefone'])){
        $_SESSION['msg'] = "<p style='color: darkgred; text-align: center; display: inline-box; width:350px; padding: 5px;
            background: rgb(255, 105, 105); border-radius: 10px; margin: 0 auto; margin-top:5px; margin-bottom: 5px;
            border-style: solid; border-width:2px; border-color:darkgred;'>
            Por favor, preencha todos os campos</p>";
            header("Location: /contato.php");
    }
?>