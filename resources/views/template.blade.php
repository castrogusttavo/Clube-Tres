<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="https://clube.escolhatres.com.br/views/files/imgs/clube_tres_video_branco.png">
    <title>Clube TRES</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://clube.escolhatres.com.br/views/files/js/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/bootstrap/css/bootstrap.min.css">
    <script src="https://clube.escolhatres.com.br/views/files/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://clube.escolhatres.com.br/views/files/bx/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/bx/jquery.bxslider.css">
    <script src="https://clube.escolhatres.com.br/views/files/js/script.js"></script>
    <script type="text/javascript" src="https://clube.escolhatres.com.br/views/files/js/main.js"></script>
    <link rel="stylesheet" id="cookie-law-info-css" href="https://www.escolhatres.com.br/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public.css?ver=3.1.1" media="all">
    <link rel="stylesheet" id="cookie-law-info-gdpr-css" href="https://www.escolhatres.com.br/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr.css?ver=3.1.1" media="all">
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/css/geral.css">
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/css/geral-usuario.css">
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/css/style.css">
    <link rel="stylesheet" href="https://clube.escolhatres.com.br/views/files/css/area-usuario.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&amp;display=swap" rel="stylesheet">z
</head>

<body>
    {{-- NAVBAR --}}
    <div id="preloader_operation">
        <img src="https://clube.escolhatres.com.br/views/files/imgs/loading.svg" width="60" height="60">
    </div>
    
    <div class="container-fluid menu hidden-xs">
        <div class="row menu-externo hidden-xs">
            <div class="container-menu-externo auto" >
                <div class="menu-esquerdo">
                    <div class="logo">
                        <a href="/">
                            <img src="https://clube.escolhatres.com.br/views/files/imgs/home/logotres.png" class="img-responsive">
                        </a>
                    </div>
                    <div class="area-logado area-de-login">
                        <!-- Adicione aqui o conteúdo da área logada ou de login -->
                    </div>
                </div>
                <ul class="sites">
                    <li class="s_bold">
                        <a href="https://www.escolhatres.com.br/sobre-a-marca/">SOBRE A TRES®</a>
                    </li>
                    <li class="s_bold">
                        <a href="https://www.escolhatres.com.br/central-de-ajuda/" class="last">SAC</a>
                    </li>
                    <li class="s_bold">
                        <a href="https://www.mercafe.com.br/" class="store">COMPRAR</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row menu-interno">
            <div class="col-md-12">
                <nav class="navbar navbar-default nav-home">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
                            <ul class="nav navbar-nav s p12 upper marrom top10 navbar-center">
                                <li>
                                    <a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/" class="p10 marrom s_light space2 upper button text-center">
                                        <img src="https://clube.escolhatres.com.br/views/files/imgs/home/ico_login.png"> LOGIN
                                    </a>
                                </li>
                                <li>
                                    <a href="beneficios" class="p12 space2">
                                        <img src="https://clube.escolhatres.com.br/views/files/imgs/home/ico_participar.png"> benefícios
                                    </a>
                                </li>
                                <li>
                                    <a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/" class="p12 space2">
                                        <img src="https://clube.escolhatres.com.br/views/files/imgs/home/ico_cadastro.png"> cadastre-se
                                    </a>
                                </li>
                                <li>
                                    <a href="regulamento" class="p12 space2">
                                        <img src="https://clube.escolhatres.com.br/views/files/imgs/home/ico_regulamento.png"> regulamento
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.escolhatres.com.br/reciclagem/" target="_blank" class="p12 space2">
                                        <img src="https://clube.escolhatres.com.br/views/files/imgs/home/ico_reciclagem.png"> reciclagem
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>    

    <div class="container-fluid visible-xs" style="padding:0;position: fixed;width: 100%;z-index:999;top:0">
        <div class="row sites-tres">
            <a href="https://www.escolhatres.com.br/sobre-a-marca/" class="col-xs-6 s_light p5 upper tcenter amarelo"
                style="background:#411200;padding-top:10px;padding-bottom:10px;">Sobre a <b>TRES</b></a>
            <a href="https://www.escolhatres.com.br/central-de-ajuda/" class="col-xs-2 s_light p5 upper tcenter amarelo"
                style="background:#411200;padding-top:10px;padding-bottom:10px;">SAC</a>
            <a href="https://www.mercafe.com.br/" class="col-xs-4 s_light p5 upper tcenter amarelo"
                style="background:#270100;padding-top:10px;padding-bottom:10px;">Comprar</a>
        </div>
        <div class="row menu-open-close">
            <div class="col-xs-12 s_light p5 upper tcenter amarelo tleft externo-menu-mobile">
                <a href="https://www.escolhatres.com.br" class="logo-mobile">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/home/logotres.png">
                </a>
                <div id="menu-mobile">
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <ul>
                <li class="area-logado area-logado-mobile area-login-mobile">
                    <a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/"
                        class="p10 marrom s_bold space2 upper button tcenter">LOGIN</a>
                </li>
            </ul>
        </div>
        <div class="row menu-mobile-item">
            <div class="col-md-12">
                <ul class="menu-item-mobile s_light p12 upper marrom top10">
                    <li style="border-bottom: 1px solid #3F1001;"><a href="https://clube.escolhatres.com.br/"
                            class="p18 ln40 marrom">home</a></li>
                    <li><a href="https://clube.escolhatres.com.br/como-participar" class="p18 ln30 marrom">benefícios</a></li>
                    <li><a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/"
                            class="p18 ln40 marrom">cadastre-se</a></li>
                    <li><a href="https://clube.escolhatres.com.br/regulamento" class="p14 s_bold marrom ln24">regulamento</a>
                    </li>
                    <li><a href="https://www.escolhatres.com.br/central-de-ajuda" class="p14 s_bold marrom ln24">central de
                            ajuda</a></li>
                </ul>
            </div>
        </div>
    </div>    

    {{-- CONTEÚDO --}}
    <section style="margin-top: -2rem">
        @yield('conteudo')
    </section>

    {{-- FOOTER --}}
    <div class="container-fluid visible-xs" style="padding:0">
        <div class="row">
            <a href="http://www.escolhatres.com.br/" class="col-xs-6 s_light p5 upper tcenter amarelo"
                style="background:#411200;padding-top:10px;padding-bottom:10px;">Escolha <b>TRES</b></a>
            <a href="https://www.mercafe.com.br/" class="col-xs-6 s_light p5 upper tcenter amarelo"
                style="background:#270100;padding-top:10px;padding-bottom:10px;">COMPRAR</a>
        </div>
        <div class="row">
            <div class="col-xs-12 s_light p5 upper tcenter amarelo" style="background:#230c00;;padding-top: 10px;">
                <a href="https://clube.escolhatres.com.br/regulamento/politica_de_privacidade"><span
                        class="branco p12">Política de Privacidade</span></a> |
                <a href="https://clube.escolhatres.com.br/regulamento/portal_da_privacidade"><span class="branco p12 tu">Portal
                        de Privacidade</span></a>
                <img src="https://clube.escolhatres.com.br/views/files/imgs/footer-mobile.png" class="img-responsive auto">
            </div>
        </div>
    </div>
    <div class="footer hidden-xs">
        <a href="https://clube.escolhatres.com.br/regulamento/politica_de_privacidade"><span class="branco p12 tu">Política de
                Privacidade</span></a> |
        <a href="https://clube.escolhatres.com.br/regulamento/portal_da_privacidade"><span class="branco p12 tu">Portal de
                Privacidade</span></a>
        <ul class="sociais">
            <li>
                <a href="https://www.instagram.com/escolha_tres/" target="_blank">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/instagram.png" alt="Instagram"
                        title="Instagram">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/escolhaTRES" target="_blank">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/facebook.png" alt="Facebook" title="Facebook">
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/user/escolhatres" target="_blank">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/youtube.png" alt="Youtube" title="Youtube">
                </a>
            </li>
        </ul>
        <hr class="divisao">
        <div class="logo-footer ">
            <img src="https://www.escolhatres.com.br/wp-content/uploads/2019/11/logo_tres-145x150.png" style="width: 80px;">
            <p class="top10 s_bold" style="color:#664d42"> 2023. TODOS OS DIREITOS RESERVADOS AO GRUPO 3CORAÇÕES.</p>
        </div>
    </div>

    {{-- JAVASCRIPT --}}
    <script>
        function showOauthWindow() {
            const windowArea = {
                width: Math.floor(window.outerWidth * 0.9),
                height: Math.floor(window.outerHeight * 0.8),
            };
            if (windowArea.width > 850) { windowArea.width = 800; }
            if (windowArea.height > 550) { windowArea.height = 600; }
            windowArea.left = Math.floor(window.screenX + ((window.outerWidth - windowArea.width) / 2));
            windowArea.top = Math.floor(window.screenY + ((window.outerHeight - windowArea.height) / 8));
            const windowOpts = `toolbar=0,scrollbars=1,status=1,resizable=1,location=1,menuBar=0,width=${windowArea.width},height=${windowArea.height},left=${windowArea.left},top=${windowArea.top}`;
            url = "https://3coracoes.socialidnow.com/oauth/authorize?client_id=751&redirect_uri=https://clube.escolhatres.com.br/oauth/callback&response_type=code&scope=openid profile email user_data";
            newwindow = window.open(url, '3coracoes', windowOpts);
            if (window.focus) { newwindow.focus() }
            return false;
        }
    </script>

    <script type="text/javascript">
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 50) {
                $('.menu-externo').css({ 'position': 'fixed' });
                $('.menu-interno').css({ 'position': 'fixed' });
            } else {
                $('.menu-externo').css({ 'position': 'inherit' });
                $('.border-bottom').css({ 'display': 'block' });
                $('.menu-interno').css({ 'position': 'inherit' });
            }
        });
    </script>

</body>

</html>
