<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/ws_html5/02-html5-semantico/');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>SJT Digital - Aplicações Web de Qualidade!</title>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/boot.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="shortcut icon" href="img/favicon.png">

    </head>
    <body>
        <!-- INICIO HEADER -->
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a class="radius" title="Home" href="<?= BASE; ?>">
                        SJT Digital - Aplicações Web de Qualidade!
                    </a>
                </h1>

                <ul class="main_nav fl-right">
                    <li><a title="Serviços SJT Digital" href="<?= BASE; ?>/html5-semantico">Serviços</a></li>
                    <li><a title="Hospedagem SJT Digital" href="<?= BASE; ?>/estilo-com-oocss">Hospedagem</a></li>
                    <li><a title="Blog SJT Digital" href="<?= BASE; ?>/formularios-com-html5">Blog</a></li>
                    <li><a title="Loja SJT Digital" href="<?= BASE; ?>/audio-e-video">Loja</a></li>
                    <li><a title="Sobre a SJT Digital" href="<?= BASE; ?>/geolocation-e-storage">Sobre</a></li>
                    <li><a title="Contato da SJT Digital" href="<?= BASE; ?>/micro-dados">Contato</a></li>
                    <li><a class="btn btn-green radius boxshadow" title="Localizar SJT Digital" href="http://sandrotorres.com.br" target="_blank" rel="noopener noreferrer">Localização</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--INÍCIO CONTEÚDO-->
        <article class="container">
            <div class="content">
                <header class="sectiontitle">
                    <hgroup>
                        <h1>Conheça um pouco mais sobre a SJT Digital!</h1>
                        <h2>Veja como podemos ajudar a <mark>solucionar</mark> seus problemas!</h2>
                    </hgroup>
                </header>

                <!--CONTEÚDO-->
                <!--bloco de vídeo-->
                <video class="video video-large main_video" src="midias/issues com commits.mp4" width="400" controls></video>

                <aside class="al-center">
                    <h1>Pronto para <a class="btn btn-green radius" title="Contactar a SJT Digital Agora!" target="_blank" href="http://sandrotorres.com.br/">contactar a SJT Digital </a> e esclarecer suas dúvidas?</h1>
                </aside>

                <div class="clear"></div>
            </div>

            <footer class="bg-bluelight">
                <section class="content main_videos" style="padding-bottom: 10px;">
                    <h1>Veja Algums Serviços da SJT Digital!</h1>

                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Aplicações Responsivos" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg">
                        </div>
                        <h1 class="box_video_title">Aplicações Responsivos</h1>
                    </article>

                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Desenvolvimento Front-End" alt="Desenvolvimento Front-End" src="img/entendendo-o-html5.jpg">
                        </div>
                        <h1 class="box_video_title">Desenvolvimento Front-End</h1>
                    </article>

                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Otimização SEO" alt="Otimização SEO" src="img/entendendo-o-html5.jpg">
                        </div>
                        <h1 class="box_video_title">Otimização SEO</h1>
                    </article>

                    <article class="box box-small last">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Aplicações Mobile" alt="Aplicações Mobile" src="img/entendendo-o-html5.jpg">
                        </div>
                        <h1 class="box_video_title">Aplicações Mobile</h1>
                    </article>

                    <div class="clear"></div>
                </section>
            </footer>
        </article>

        <!--SEÇÃO RELACIONAL-->
        <!--CONTAINER DO TITULO-->
        <section class="container bg-orange">
            <div class="content">
                <hgroup class="sectiontitle sectiontitle-nomargin">
                    <h1>Conheça as tecnologias utilizadas!</h1>
                    <h2>A SJT Digital apresenta técnicas com foco em produção e otimização de conteúdo para internet!</h2>
                </hgroup>
                <div class="clear"></div>
            </div>

            <!--CONTAINER DOS ARTIGOS-->
            <div class="container bg-body">
                <div class="content" style="padding-bottom: 10px;">
                    <article class="main_tec_item box box-small al-center radius">
                        <img src="img/tec_semantic.png" alt="HTML5 Semântico" title="Módulo de HTML5 Semântico">
                        <h1>HTML5 Semântico:</h1>
                        <p class="tagline">Aprenda a produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para robôs de busca!</p>
                    </article>

                    <article class="main_tec_item box box-small al-center radius">
                        <img src="img/tec_drycss.png" alt="CSS produtivo com OOCSS" title="Módulo de CSS produtivo com OOCSS">
                        <h1>CSS produtivo com OOCSS:</h1>
                        <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padronizado e de ágil desenvolvimento!</p>
                    </article>

                    <article class="main_tec_item box box-small al-center radius">
                        <img src="img/tec_forms.png" alt="Formulários com HTML5" title="Módulo de Formulários com HTML5">
                        <h1>Formulários com HTML5:</h1>
                        <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulário do HTML5!</p>
                    </article>

                    <article class="main_tec_item box box-small al-center radius last">
                        <img src="img/tec_midia.png" alt="Áudio e Vídeo na Web" title="Módulo de Áudio e Vídeo na Web">
                        <h1>Áudio e Vídeo na Web:</h1>
                        <p class="tagline">Nunca foi tão fácil incorporar e controlar mídias na internet. Aprenda a fazer isso de forma fácil!</p>
                    </article>

                    <div class="box-line"></div>

                    <article class="main_tec_item box box-small al-center radius">
                        <img src="img/tec_geo.png" alt="Geolocation e HTML5 Storage" title="Módulo de Geolocation e HTML5 Storage">
                        <h1>Geolocation e HTML5 Storage:</h1>
                        <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E ainda armazene dados de navegação apenas com HTML!</p>
                    </article>

                    <article class="main_tec_item box box-small al-center radius">
                        <img src="img/tec_microdados.png" alt="Distribuição com Micro Dados" title="Módulo de Distribuição com Micro Dados">
                        <h1>Distribuição com Micro Dados:</h1>
                        <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuir conteúdo otimizado de forma extrema!</p>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <!--SEÇÃO TEMÁTICA-->
        <section class="container bg-bluelight">
            <div class="content">
                <div class="sectiontitle">
                    <h1 class="shoticon shoticon-config shoticon-sectiontitle ds-inblock">Ficha Técnica:</h1>
                    <p class="tagline">Saiba mais sobre os serviços qu a SJT Digital tem a oferecer!</p>
                </div>

                <article class="main_info box box-small"><h1>Hospedagem: <b>#</b></h1></article>
                <article class="main_info box box-small"><h1>SEO: <b>#</b></h1></article>
                <article class="main_info box box-small"><h1>Mobile: <b>#</b></h1></article>
                <article class="main_info box box-small last"><h1>Aplicações Web: <b>#</b></h1></article>

                <div class="clear"></div>
            </div>
        </section>

        <!--RETOMADA E COVERÇÃO-->
        <article class="container bg-blue">
            <div class="content content-page al-center">
                <hgroup class="sectiontitle">
                    <h1>Faça Parte da Turma WS HTML5, Matricule-se!</h1>
                    <h2>Começe Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></h2>
                </hgroup>

                <a class="btn btn-big btn-green radius" title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="http://www.sandrotorres.com.br">Comprar WS HTML5!</a>

                <footer>
                    <div class="main_chamada al-center">
                        Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
                    </div>
                </footer>

                <div class="clear"></div>
            </div>
        </article>

        <!--CONTENT VISUAL-->
        <div class="container">
            <div class="content content-page al-center fontsize2 font-light">
                SJT Digital - Marketing Direto. As melhores e mais completas soluções em Aplicações WEB e Mobile do mercado!
                <div class="clear"></div>
            </div>
        </div>


        <!-- INÍCIO FOOTER -->
        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a SJT Digital</h1>

                <nav class="box box-medium">
                    <h1 class="title font-bold">Mais Sobre SJT Digital</h1>
                    <ul>
                        <li><a class="shoticon shoticon-section" href="#apresentacao" title="Assista o Vídeo de Apresentação">Assista o Video</a></li>
                        <li><a class="shoticon shoticon-section" href="#apresentacao" title="Assista o Vídeo de Apresentação">Você vai Aprender</a></li>
                        <li><a class="shoticon shoticon-section" href="#apresentacao" title="Assista o Vídeo de Apresentação">Ficha Técnica</a></li>
                    </ul>
                </nav>

                <article class="box box-medium">
                    <h1 class="title font-bold">SJT Digital nas Redes Sociais</h1>
                    <ul>
                        <li><a class="shoticon shoticon-facebook" href="https://www.facebook.com/SandroJ.Torres" rel="nofollow" target="_blank" title="Sandro Torres no Facebook">Facebook</a></li>
                        <li><a class="shoticon shoticon-twitter" href="https://twitter.com/SandroJT" rel="nofollow" target="_blank" title="Sandro Torres no Twitter">Twitter</a></li>
                        <!--<li><a class="shoticon shoticon-google" href="https://plus.google.com/u/0/111175538746861736100" rel="nofollow" target="_blank" title="Sandro Torres no Google+">Google +</a></li>-->
                        <li><a class="shoticon shoticon-github" href="https://github.com/sjtorres" rel="nofollow" target="_blank" title="Sandro Torres no GitHub">GitHub</a></li>
                    </ul>
                </article>

                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">Plataforma UpInside</h1>

                    <p class="shoticon shoticon-config"><b>Sandro Torres:</b> <a title="Plataforma Sandro Torres" href="http://sandrotorres.com.br"> sandrotorres.com.br</a></p>
                    <p class="shoticon shoticon-mail"><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:sandro@sandrotorres.com.br">sandro@sandrotorres.com.br</a></p>
                    <hr>
                    <p class="plast">&copy; <?= date('Y'); ?> - SJT - Digital, Todos os Direitos Reservados! </p>
                </article>


                <div class="clear"></div>
            </section>
        </footer>
    </body>
</html>
