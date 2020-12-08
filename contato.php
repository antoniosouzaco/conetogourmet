<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="pt-BR" dir="ltr">

<!---->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coneto</title>
    <link rel="stylesheet" href="_css/menu.css">
    <link rel="stylesheet" href="_css/corpo_formulario.css">
    <link rel="stylesheet" href="_css/reset.css">
    <link rel="stylesheet" href="_css/rodape.css">
    <link rel="sortcut icon" href="_imagens/logo_coneto.ico"/>
</head>

<!---->

<body>
    <!--MENU-->
    <nav class="nav_menu">
        <div class="logo">Coneto</div>
        <label for="btn" class="icon">&#9776;</label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="quemsomos.html">Quem somos</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
    <img class="img_menu" src="_imagens/coneto_menu.png">






    
    <!--CORPO-->
    <section class="section">
        <form method="POST" action="_php/email.php">
            <?php
                if(isset($_SESSION['msg']))
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
            <fieldset class="campo">
                <legend class="legenda_formulario">Contato</legend>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="input_formulario nome_input" maxlength="60" placeholder="Nome completo"/> 
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="input_formulario email_input" maxlength="50" placeholder="Seu e-mail"/> 
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="number" id="telefone" name="telefone" class="input_formulario telefone_input" maxlength="9" placeholder="DDD+Numero - 999999999"/> 
                </div>
                <div class="campo">
                    <label for="assunto">Assunto</label>
                    <select name="assunto" id="assunto">
                        <option value="Em branco"></option>
                        <option value="Encomendar">Encomendas</option>
                        <option value="Reclamação">Reclamações</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="mensagem">Mensagem</label>
                    <textarea rows="6" id="mensagem" name="mensagem"></textarea>
                </div>
                <button type="submit" class="botao" name="submit">Enviar</button>
            </fieldset>
        </form>
    </section>






    <!--RODAPE-->
    <footer class="footer">
        <nav class="sociais">
            <a href="https://t.me/antoniosouzaco" target="_blank"><img class="img_icon img_icon_telegram" src="_imagens/telegram.png"></a>
            <a href="https://api.whatsapp.com/send?phone=5519981697541" target="_blank"><img class="img_icon img_icon_whatsapp" src="_imagens/whatsapp.png"></a>
            <a href="https://www.facebook.com/" target="_blank"><img class="img_icon img_icon_facebook" src="_imagens/facebook.png"></a>
            <a href="https://www.instagram.com/conetogourmet/" target="_blank"><img class="img_icon img_icon_instagram" src="_imagens/instagram.png"></a>
            <a href="https://goo.gl/maps/B7hrcArBWpzgDhJq7" target="_blank"><img class="img_icon img_icon_googlemaps" src="_imagens/googlemaps.png"></a>
        </nav>
        <p class="end"><a class="texto_todape end" href="https://goo.gl/maps/B7hrcArBWpzgDhJq7" target="_blank">Av. Rio das Pedras, 2201(31/101) - Piracicaba/SP </a></p>
        <p class="contato">19 99999-9999 - <a class="email" href="mailto:cornetogourmet@gmail.com?subject=Hello%20again">conetogourmet@gmail.com</a></p>
        <p class="desenvolvedor">Copyright 2020 © by <a class="desenvolvedor tecsup" href="tecnologiaesuporte.com.br">Tecnologia & Suporte</a></p>
    </footer>
</body>

<!---->

</html>