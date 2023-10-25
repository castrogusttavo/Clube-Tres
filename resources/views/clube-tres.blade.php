@extends('template')
@section('conteudo')
    {{-- PART I --}}    
    <div class="home-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-6 home-top-left">
                    <div class="home-top-left-inner">
                        <img src="https://clube.escolhatres.com.br/views/files/imgs/clube_tres_video_branco.png" alt="Clube Tres Video Branco">
                        <h2 class="s_bold upper marrom">
                            Programa de benefícios para quem é apaixonado por sabores.
                        </h2>
                        <p>
                            Novidades em primeira mão, descontos em produtos, conteúdo exclusivo e muito mais.<br>
                            <a href="https://clube.escolhatres.com.br/cadastro">Clique e participe!</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 hidden-xs home-top-right ">
                </div>
            </div>
        </div>
    </div>


    {{-- PART II --}}
    <div class="container home-texts">
        <div class="row top70">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="tcenter p30 s_light ln50 upper">
                    Bem-vindo(a) ao clube
                    <img src="https://clube.escolhatres.com.br/views/files/imgs/logo-tres.png" style="width: 80px;" class="vertical-top"><br>
                    a melhor <span class="s_bold vermelho">experiência</span> em cafés espresssos e multibebidas.
                </h3>
            </div>
        </div>
        <div class="row top50">
            <div class="col-md-8 col-md-offset-2">
                <p class="upper p22 s_bold tcenter top5 marrom-escuro-novo">No <span class="s_bold vermelho upper">Clube Tres®</span> você faz parte de um Programa de benefícios exclusivos desenvolvidos para quem é apaixonado por sabores de café.</p>
            </div>
        </div>
        <div class="row top90">
            <div class="col-md-6 col-md-offset-3 tcenter">
                <a href="https://clube.escolhatres.com.br/cadastro" class="s btn-participe upper branco auto">
                    Participe agora
                </a>
            </div>
        </div>
        <div class="row top40">
            <div class="col-md-6 col-md-offset-3">
                <p class="upper p20 s_light tcenter top5 upper">Quanto mais você participar, <br> mais<span class="s_bold vermelho"> vantagens</span> e <span class="s_bold vermelho">benefícios</span> você recebe.</p>
            </div>
        </div>
    </div>
    

    {{-- PART III --}}
    <div class="container-fluid top30 area-beneficios">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-6  box-descricao-left" style="background: #3d1300">
                        <div class="box-descricao">
                            <img src="https://clube.escolhatres.com.br/views/files/imgs/cifra_dinheiro.png" class="img-responsive">
                            <p>Descontos especiais</p>
                        </div>
                    </div>
                    <div class="col-xs-6 box-descricao-right" style="background: #967b65">
                        <div class="box-descricao">
                            <img src="https://clube.escolhatres.com.br/views/files/imgs/diamante.png" class="img-responsive">
                            <p>Benefícios exclusivos</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 box-descricao-left" style="background: #ab192d">
                        <div class="box-descricao">
                            <img src="https://clube.escolhatres.com.br/views/files/imgs/mensagem.png" class="img-responsive">
                            <p>Novidades da TRES<span class="vertical-top f14">® </span><br>em primeira mão</p>
                        </div>
                    </div>
                    <div class="col-xs-6 box-descricao-right" style="background: #c5a981">
                        <div class="box-descricao">
                            <img src="https://clube.escolhatres.com.br/views/files/imgs/pc.png" class="img-responsive">
                            <p>Pré-compra<br>de lançamentos</p>
                        </div>
                    </div>
                </div>
                <div class="row top30">
                    <div class="col-md-12">
                        <p class="s_bold p17 upper tcenter vermelho space6"> e muito mais... </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    {{-- PART IV --}}
    <div class="container-fluid" style="background: #fdf8f5">
        <a href="https://clube.escolhatres.com.br/regulamento">
            <img style="width: 100%; max-width: 1300px; margin: 0 auto; display: block;"
                src="https://clube.escolhatres.com.br/views/files/imgs/home/banner_novas_regras_2.jpg">
        </a>
    </div>
@endsection