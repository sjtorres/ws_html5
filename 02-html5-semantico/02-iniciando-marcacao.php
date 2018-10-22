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

        <link rel="stylesheet" href="oocss.css">

    </head>
    <body>

        <header class="main_header">
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
                <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" href="http://sandrotorres.com.br" target="_blank" rel="noopener noreferrer"></a></li>
            </ul>
        </header>

        <!--CONTEÚDO-->

        <footer class="main_footer">
            <section>
                <h1>UpInside Treinamentos</h1>
            </section>
        </footer>
    </body>
</html>
