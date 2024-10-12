<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles_homepage.css" rel="stylesheet">
    <link href="/styles/fonts.css" rel="stylesheet">

    <title>Página Inicial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="rodapecima">
            <div id="title">
                <img id="img" src="imgs/logo darr.png" alt="">
            </div>
            <style>
                a {
                    text-decoration: none;
                }
            </style>

            <ul>
                <li><a href="./index.php">Início</a></li>
                <li><a href="#Sobre">Sobre</a></li>
                <li><a href="./login.php" id="inscreva-se-btn">Login</a></li>
            </ul>
        </header>


        <main>

            <article>

                <img id="bannerquerodoar" src="imgs/BANNER_QUERO_DOAR_BEM_VINDO150x-100.jpg" alt="mulherroxa">

            </article>

            <div class="rodapecima2">
                <img id="imagemmeio" src="imgs/imagemdoaçãominicial.png" alt="">

            </div>

            <div id="Sobre">


                <span class="quemsomos">Quem somos e o que fazemos ?</span>


                <p class="text">QUERO DOAR !, com sede em Anapolís , é uma fundação de
                    caridade dedicada a ajudar pessoas necessitadas. Com a dedicação
                    de nossos voluntários, membros da nossa equipe e parceiros,
                    buscamos melhorar a vida de todos os que precisam de assistência
                    dentro da comunidade. Entre em contato para ver o que você pode
                    fazer para criar uma mudança positiva.
                </p>
            </div>

    </div>

    <div>
        <img id="doeaqui" src="imgs/façasuadoação.jpg" alt="">
    </div>



    <div><img id="aspas" src="imgs/aspas.png" alt="">

        <p class="frase">"Seja a mudança: doe"</p>

    </div>

    <div class="rodapebaixo"></div>


    <aside>
        <h2 class="entreemcontato">Entre em Contato</h2>


        <form class="caixadelogin" action="https://formsubmit.co/harissisgrego123@gmail.com" method="POST">
            <input type="text" name="name" placeholder="Digite seu nome" required>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>

            <textarea id="digitesuamensagem" cols="30" rows="10" name="message" placeholder="Digite sua mensagem"
                required></textarea>

            <button class="digitesuamensagem" type="submit">ENVIAR</button>

            <input type="hidden" name="_subject" value="Novo Contato!">
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </aside>





    </main>


    <div>
        <img id="instagram" src="imagens/instagram.png" alt="">
        <a class="insta" href="https://www.instagram.com/projetoquerodoar">
            <li> @projetoquerodoar</li>
        </a>
    </div>

</body>

</html>