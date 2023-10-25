@extends('template')
@section('conteudo')
    {{-- PART I --}}
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
                    <li style="border-bottom: 1px solid #3F1001;"><a href="https://clube.escolhatres.com.br/" class="p18 ln40 marrom">home</a></li>
                    <li><a href="https://clube.escolhatres.com.br/como-participar" class="p18 ln30 marrom">benefícios</a></li>
                    <li><a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/" class="p18 ln40 marrom">cadastre-se</a></li>
                    <li><a href="https://clube.escolhatres.com.br/regulamento" class="p14 s_bold marrom ln24">regulamento</a></li>
                    <li><a href="https://www.escolhatres.com.br/central-de-ajuda/" class="p14 s_bold marrom ln24">central de ajuda</a></li>
                </ul>
            </div>
        </div>
    </div>    

    <div class="participar-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-6 participar-top-left">
                    <div class="participar-top-left-inner">
                        <img src="https://clube.escolhatres.com.br/views/files/imgs/clube_tres_video_branco.png">
                        <h2 class="s_bold upper">
                            Como<br>
                            Participar
                        </h2>
                        <p class="s_bold">
                            Cadastre os códigos das caixas de cápsulas para atingir uma categoria de benefícios e ganhar vantagens no <a href="https://www.mercafe.com.br">E-commerce TRES<span class="trademark">®</span></a>.<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 hidden-xs participar-top-right "></div>
            </div>
        </div>
    </div>

    {{-- PART II --}}
    <div class="container participar-texts">
        <div class="row top70">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="tcenter p35 s_light ln50 marrom-escuro-novo">
                    Ao se cadastrar no Clube TRES® <br>
                    você já é um <span class="s_bold vermelho upper">explorador</span> e ganha descontos.
                </h3>
            </div>
        </div>

        <div class="row top40">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="tcenter p22 ln30 s_light marrom-escuro-novo">
                    São 3 (tres) categorias de benefícios que você pode atingir: <br>
                    <span class="s_bold marrom-escuro upper">Explorador, Apaixonado e Entusiasta</span>.
                </h3>
            </div>
        </div>

        <div class="row top40">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="tcenter p22 ln30 s_light marrom-escuro-novo">
                    Além disso, compras realizadas no <a class="marrom-escuro-novo" href="https://www.mercafe.com.br">e-commerce <span class="s_bold vermelho upper">TRES<span class="trademark">®</span></span></a> <span class="s_bold marrom upper"> valem o dobro de códigos</span> promocionais cadastrados no <span class="s_bold vermelho upper"> clube tres<span class="trademark">®</span>.</span><br><br>
                    Aniversariantes têm direito a experiências especiais <br> e <span class="s_bold vermelho upper"> ofertas exclusivas </span>
                </h3>
            </div>
        </div>
    </div>

    {{-- PART III --}}
    <div class="container-fluid">
        <div class="row top20" style="background: #d0ab80">
                
            <div class="col-md-4" style="background: #d0ab80">
                <div class="bloco-nivel marrom">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/ico_explorador.png" />
                    <p class="nivel-title p22 s_light upper top25 ln26">Seja um<br><b class="marrom s_bold p30 upper space2">Explorador</b></p>
                    <p class="p23 s_bold top60">Esse é o primeiro nível ao se cadastrar no Clube TRES®.</p>
                    <p class="p20 s top25 upper">Aproveite descontos no <a class="marrom" href="https://www.mercafe.com.br"><b class="s_bold vermelho ">E-COMMERCE TRES<span class="vertical-top f14">®</span></b></a>:</p>
                    <p class="p20 s top25 "><span class="vermelho s_bold">- 29% na sua cápsula favorita e 27% </span>nas demais cápsulas.</p>
                    <p class="p20 s top25 "><span class="vermelho s_bold">- 5% </span>em máquinas e acessórios.</p>
                    <p class="p20 s top25">Fique sabendo dos <span class="vermelho">lançamentos da TRES<span class="vertical-top f14">®</span></span> em primeira mão, <span class="vermelho">receba promoções de cápsulas, descontos exclusivos</span> e muito mais.</p>
                    <p class="p10 s top20 italic">*Dentro de um período de 12 meses.</p>
                </div>
            </div>

            <div class="col-md-4" style="background: #a17c64">
                <div class="bloco-nivel branco">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/ico_apaixonado.png" />
                    <p class="nivel-title p22 s_light upper top25 ln26">Vire um<br><b class="s_bold p30 upper space2">Apaixonado</b></p>
                    <p class="p23 s_bold top60">Cadastre no mínimo <b class="vermelho">26 caixas</b> de cápsulas*.</p>
                    <p class="p20 s top25 upper">Aproveite descontos no <a class="marrom" href="https://www.mercafe.com.br"><b class="s_bold vermelho ">E-COMMERCE TRES<span class="vertical-top f14">®</span></b></a>:</p>
                    <p class="p20 s top25 "><span class="vermelho s_bold">- 29% </span>em qualquer cápsula.</p>
                    <p class="p20 s top25 "><span class="vermelho s_bold">- 10% </span>em máquinas e acessórios.</p>
                    <p class="p20 s top25">Fique sabendo dos <span class="vermelho">lançamentos da TRES<span class="vertical-top f14">®</span></span> em primeira mão, <span class="vermelho">receba promoções de cápsulas, descontos exclusivos</span> e muito mais.
                    E no<span class="vermelho"> mês do seu aniversário</span> comemore com uma <span class="vermelho">promoção especial e imperdível.</span></p>
                    <p class="p10 s top20 italic">*Dentro de um período de 12 meses.</p>
                </div>
            </div>
            
            <div class="col-md-4" style="background: #450b00">
                <div class="bloco-nivel branco">
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/ico_entusiasta.png" />
                    <p class="nivel-title p22 s_light upper top25 ln26">Se torne um<br><b class="s_bold p30 upper space2">Entusiasta</b></p>
                    <p class="p23 s_bold top60">Cadastre a partir de <b class="vermelho">41 caixas</b> de cápsulas*.</p>
                    <p class="p20 s top25 upper">Aproveite descontos no <a class="marrom" href="https://www.mercafe.com.br"><b class="s_bold vermelho ">E-COMMERCE TRES<span class="vertical-top f14">®</span></b></a>:</p>
                    <p class="p20 s top25 ">- 31%  <span class="vermelho s_bold">em qualquer cápsula.</span></p>
                    <p class="p20 s top25 ">- 15%  <span class="vermelho s_bold">em máquinas e</span> 10%  <span class="vermelho s_bold">em acessórios.</span></p>
                        <p class="p20 s top25">Fique sabendo dos <span class="vermelho">lançamentos da TRES<span class="vertical-top f14">®</span></span> em primeira mão, <span class="vermelho">receba promoções de cápsulas, descontos exclusivos</span> e muito mais.
                        E no <span class="vermelho"> mês do seu aniversário</span> comemore com uma <span class="vermelho">promoção especial e imperdível.</span></p>
                    <p class="p10 s top20 italic">*Dentro de um período de 12 meses.</p>
                </div>
            </div>
        </div>


    {{-- PART IV --}}
    <div class="container-fluid">
        <div class="row top100">
            <div class="col-md-8 col-md-offset-2 tcenter">
                <h4 class="upper s p35 marrom">
                    Não perca tempo! <br>
                    Faça parte agora do <span class="vermelho">Clube TRES®.</span>
                </h4>
                <p class="s_bold p22  top50">
                    Um programa de benefícios para quem é <b class="vermelho">apaixonado por sabores.</b>
                </p>
                <a href="https://clube.escolhatres.com.br/cadastro" class="bt-q-participar upper p20 s branco top50">quero participar</a>
            </div>
        </div>
    </div>
@endsection