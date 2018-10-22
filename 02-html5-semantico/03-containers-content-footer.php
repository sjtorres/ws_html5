<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/ws_html5/02-html5-semantico/');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curso Work Series - HTML5 do Jeito Certo!</title>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/oocss.css">

    </head>
    <body>
<!-- INICIO HEADER -->
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo">
                    <a title="Home" href="<?= BASE; ?>">
                        Curso Work Series - HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav">
                    <li><a title="HTML5 Semântico" href="<?= BASE; ?>/html5-semantico">Semântica</a></li>
                    <li><a title="Estilo Produtivo com OOCSS" href="<?= BASE; ?>/estilo-com-oocss">OOCSS</a></li>
                    <li><a title="Formulários com HTML5" href="<?= BASE; ?>/formularios-com-html5">Forms</a></li>
                    <li><a title="Audio e Videos na Web" href="<?= BASE; ?>/audio-e-video">Midia</a></li>
                    <li><a title="Geolocation e HTML Storage" href="<?= BASE; ?>/geolocation-e-storage">API's</a></li>
                    <li><a title="Distribuição de Micros Dados" href="<?= BASE; ?>/micro-dados">Micro Dados</a></li>
                    <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" href="http://sandrotorres.com.br" target="_blank" rel="noopener noreferrer">Comprar Curso</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

<!--INÍCIO CONTEÚDO-->


<!-- INÍCIO FOOTER -->
        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>

                <nav class="main_nav">
                    <h1 class="title">Mais Sobre WS HTML5</h1>
                    <ul>
                        <li><a href="#apresentacao" title="Assista o Vídeo de Apresentação">Assista o Video</a></li>
                        <li><a href="#apresentacao" title="Assista o Vídeo de Apresentação">Assista o Video</a></li>
                        <li><a href="#apresentacao" title="Assista o Vídeo de Apresentação">Assista o Video</a></li>
                    </ul>
                </nav>

                <article class="main_social">
                    <h1 class="title">UpInside nas Redes Sociais</h1>
                    <ul>
                        <li><a href="https://www.facebook.com/SandroJ.Torres" rel="nofollow" target="_blank" title="Sandro Torres no Facebook">Facebook</a></li>
                        <li><a href="https://twitter.com/SandroJT" rel="nofollow" target="_blank title="Sandro Torres no Twitter">Twitter</a></li>
                        <li><a href="https://plus.google.com/u/0/111175538746861736100" rel="nofollow" target="_blank title="Sandro Torres no Google+">Google +</a></li>
                    </ul>
                </article>

                <article class="main_copy">
                    <h1 class="fontzero">Plataforma UpInside</h1>

                    <p><b>Plataforma EAD:</b> <a title="Plataforma Sandro Torres" href="http://sandrotorres.com.br">www.sandrotorres.com.br</a></p>
                    <p><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:sandro@sandrotorres.com.br">sandro@sandrotorres.com.br</a></p>
                    <hr>
                    <p>&copy; <?= date('Y'); ?> - SJT - Digital, Todos os Direitos Reservados! </p>
                </article>


                <div class="clear"></div>
            </section>
        </footer>
    </body>
</html>
