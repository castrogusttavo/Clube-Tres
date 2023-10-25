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
                    <li style="border-bottom: 1px solid #3F1001;"><a href="https://clube.escolhatres.com.br/"
                            class="p18 ln40 marrom">home</a></li>
                    <li><a href="https://clube.escolhatres.com.br/como-participar" class="p18 ln30 marrom">benefícios</a></li>
                    <li><a onclick="return showOauthWindow()" href="https://3coracoes.socialidnow.com/oauth/"
                            class="p18 ln40 marrom">cadastre-se</a></li>
                    <li><a href="https://clube.escolhatres.com.br/regulamento" class="p14 s_bold marrom ln24">regulamento</a></li>
                    <li><a href="https://www.escolhatres.com.br/central-de-ajuda/"
                            class="p14 s_bold marrom ln24">central de ajuda</a></li>
                </ul>
            </div>
        </div>
    </div>


    {{-- PART II --}}
    <div class="container-fluid container-fluid-regulamento ptop150" style="background-color:#4c2c15;padding-bottom:30px;">

        <div class="container container-como-regulamento">
    
            <div class="row">
    
                <div class="col-md-12 tcenter">

					<img src="https://clube.escolhatres.com.br/views/files/imgs/regulamento/logo-clube.png" class="img-responsive auto top20">

					<h1 class="space6 s_light p27 beje-escuro upper">Regulamento</h1>

                    <h2 class="p21 s_light branco">Regulamento - Programa de Fidelidade - TRES®</h2>s

				</div>

    
            </div>
    
        </div>
    </div>    
    
    <div class="container-fluid container-fluid-regulamento"
        style="background-color:#fafafa;padding-bottom:60px;border-bottom:5px solid #ca9145">

        <div class="container" style="max-width:1050px;">


            <div class="row top30">

                <div class="col-md-12 tcenter top20 marrom tleft">

                    <h3 class="upper p20 s_bold amarelo">1. INTRODUÇÃO:</h3>
                    <p class="p13 s_light marrom auto top10">1.1. Esta atualização do regulamento ("Regulamento")
                        determina as novas regras aplicáveis ao programa de relacionamento promovido pelas empresas que
                        compõem o Grupo 3corações (“Promotora”), identificadas no item 7.16 deste Regulamento,
                        denominado CLUBE TRES®.</p>
                    <p class="p13 s_light marrom auto top10">1.2. O CLUBE TRES® é um programa de fidelidade por meio do
                        qual os
                        consumidores de cápsulas TRES® cadastrados tem a possibilidade de
                        acumular uma quantidade de Caixas, nos termos do item 3 abaixo, e
                        revertê-las em benefícios no site mercafe.com.br/tres ("Lojas Oficiais da
                        TRES®").</p>

                    <h3 class="upper p20 s_bold amarelo top40">2. COMO SE TORNAR MEMBRO DO CLUBE TRES:</h3>
                    <p class="p13 s_light marrom auto top10">2.1. Para participar do Programa CLUBE TRES®, o consumidor
                        deverá ser maior
                        de 18 (dezoito) anos e inscrito no Cadastro de Pessoas Físicas (CPF), acessar
                        o site "clube.escolhatres.com.br" ("Site"), <u>ler atentamente este Regulamento e,
                            somente se estiver de acordo com todos os seus termos, efetuar o seu
                            cadastro no site <a
                                href="https://clube.escolhatres.com.br/cadastro.">https://clube.escolhatres.com.br/cadastro</a>.
                        </u> </p>
                    <p class="p13 s_light marrom auto top10">2.2. Para conclusão do seu cadastro, serão solicitadas
                        informações como o
                        modelo de sua máquina TRES®, seus dados pessoais (nome e endereço
                        completos, CPF, sexo, data de nascimento, telefones de contato e e-mail), além
                        da criação de um login e uma senha.</p>
                    <p class="p13 s_light marrom auto top10">2.3. A efetivação do cadastro no CLUBE TRES® e o aceite do
                        consumidor a este
                        Regulamento se darão quando do preenchimento de todos os dados acima
                        descritos pelo consumidor.</p>
                    <p class="p13 s_light marrom auto top10">2.4. Os colaboradores do Grupo 3corações estão autorizados
                        a participar do
                        CLUBE TRES®, na condição de clientes, bem como seus familiares e
                        dependentes.</p>
                    <p class="p13 s_light marrom auto top10">2.5. Concluído o cadastro, o consumidor se torna membro do
                        CLUBE TRES®
                        ("Membro"), podendo iniciar sua participação neste Programa.</p>


                    <h3 class="upper p20 s_bold amarelo top40">3. PRODUTOS PARTICIPANTES:</h3>
                    <p class="p13 s_light marrom auto top10">3.1. Participam do CLUBE TRES® todos os cartuchos de
                        cápsulas TRES®,
                        comercializados pela empresa Promotora através de qualquer canal de vendas.</p>
                    <p class="p13 s_light marrom auto top10">3.1.1. Cartucho de cápsulas significa uma caixa contendo
                        10
                        (dez) unidades de
                        cápsulas TRES® ("Caixa") que no seu interior leva impressão de um código
                        composto de 12 (doze) caracteres.</p>
                    <p class="p13 s_light marrom auto top10">3.2. Além das Caixas, participam do Programa máquinas e
                        acessórios TRES®
                        exclusivamente comprados nas Lojas Oficiais da TRES®. Na compra de
                        uma máquina, de qualquer modelo disponível, o Membro receberá,
                        automaticamente, a pontuação equivalente a 10 (dez) Caixas cadastradas. Na
                        compra de qualquer acessório , o Membro receberá automaticamente a
                        pontuação equivalente a 01 (uma) Caixa cadastrada.</p>


                    <h3 class="upper p20 s_bold amarelo top40">4. COMO APROVEITAR OS BENEFÍCIOS:</h3>
                    <p class="p13 s_light marrom auto top10">4.1. O Membro do CLUBE TRES® inicia sua efetiva
                        participação no Programa
                        ao se cadastrar. Para cadastrar suas Caixas é necessário acessar o link
                        "Cadastrar Cápsula" no Site e inserir o código que está localizado no interior da
                        embalagem.<br> <br>

                        O Membro que acumular, dentro do período de vigência deste Programa e
                        prazos de acúmulo previstos abaixo, a quantidade mínima exigida de Caixas
                        para se enquadrar em uma das categorias e poderá revertê-la em benefícios
                        de acordo com a sua categoria de Membro.</p>

                    <p class="p13 s_light marrom auto top10">4.2. Categorias de Membro: </p>

                    <table class="table top20">
                        <thead>
                            <tr style="background: #ead6ba">
                                <td>Categoria do Membro</td>
                                <td>Quantidade de Caixas</td>
                                <td>Prazo Acumulado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #d0ab80">
                                <th>EXPLORADOR
                                </th>
                                <td>DE 0 A 25</td>
                                <td>12 MESES</td>
                            </tr>
                            <tr style="background: #a17c64">
                                <th>APAIXONADO
                                </th>
                                <td>DE 26 A 40</td>
                                <td>12 MESES</td>
                            </tr>
                            <tr style="background: #450b00; color: white">
                                <th>ENTUSIASTA
                                </th>
                                <td>41+</td>
                                <td>12 MESES</td>
                            </tr>
                        </tbody>
                    </table>


                    <p class="p13 s_light marrom auto top10">4.3. <strong><u>Membro Explorador</u></strong> - ao se
                        cadastrar no CLUBE TRES® o consumidor já
                        se torna um Membro Explorador, podendo cadastrar até o equivalente a 25 (vinte e cinco) Caixas
                        no período de 12 (doze) meses e receber os seguintes
                        benefícios:</p>
                    <p class="p13 s_light marrom auto top10">4.3.1. Desconto de 5% (cinco por cento) na compra de
                        máquinas e de
                        acessórios nas Lojas Oficiais da TRES®; 29% (vinte e nove por cento) de
                        desconto no valor do preço original na compra de cápsulas favoritas e 27%
                        (vinte e sete por cento) de desconto no valor do preço original na compra de
                        caixas de cápsula não qualificadas como favorita. Os descontos apresentados
                        nesta cláusula não serão cumulativos com os expostos no site advindo de
                        outras promoções, salvo regulamento específico da promoção;</p>
                    <p class="p13 s_light marrom auto top10">4.3.2. Promoções pontuais; </p>
                    <p class="p13 s_light marrom auto top10">4.3.3. Preview de Lançamentos; </p>
                    <p class="p13 s_light marrom auto top10">4.3.4. Promoção Especial no mês do aniversário do Membro.
                    </p>
                    <p class="p13 s_light marrom auto top10">4.3.5. Frete Grátis conforme condições do item 4.6.5; </p>

                    <p class="p13 s_light marrom auto top20">4.4. <strong><u>Membro Apaixonado</u></strong> - -
                        cadastrando o equivalente a no mínimo 26 (vinte e
                        seis) e no máximo 40 (quarenta) Caixas no período de 12 (meses), o Membro
                        se torna um Apaixonado e terá como benefícios:</p>
                    <p class="p13 s_light marrom auto top10">4.4.1. Desconto de 10% (dez por cento) na compra de Caixas
                        de máquinas e
                        de acessórios nas Lojas Oficiais da TRES® e 29% (vinte e nove por cento) de
                        desconto no valor do preço original na compra de cápsulas. Os descontos
                        apresentados nesta cláusula não serão cumulativos com os expostos no site
                        advindo de outras promoções, salvo regulamento específico da promoção; </p>
                    <p class="p13 s_light marrom auto top10">4.4.2. Promoções pontuais; </p>
                    <p class="p13 s_light marrom auto top10">4.4.3. Preview de Lançamentos; </p>
                    <p class="p13 s_light marrom auto top10">4.4.4. Promoção Especial no mês do aniversário do Membro.
                    </p>
                    <p class="p13 s_light marrom auto top10">4.4.5. Frete Grátis conforme condições do item 4.6.5; </p>
                    <p class="p13 s_light marrom auto top10">4.4.6. Convites especiais; </p>


                    <p class="p13 s_light marrom auto top20">4.5. <strong><u>Membro Entusiasta</u></strong> -
                        cadastrando o equivalente a 41 (quarenta e uma)
                        Caixas ou mais no período de 12 (meses), o Membro se torna um Entusiasta e
                        terá como benefícios: </p>
                    <p class="p13 s_light marrom auto top10">4.5.1. Desconto de 15% (quinze por cento) na compra de
                        máquinas nas Lojas
                        Oficiais da TRES® e 31% (trinta e um por cento) de desconto no valor do
                        preço original na compra de cápsulas. Os descontos apresentados nesta
                        cláusula não serão cumulativos com os expostos no site advindo de outras
                        promoções, salvo regulamento específico da promoção;</p>
                    <p class="p13 s_light marrom auto top10">4.5.2. Desconto de 10% (dez por cento) na compra de
                        acessórios nas Lojas
                        Oficiais da TRES®;</p>
                    <p class="p13 s_light marrom auto top10">4.5.3. Promoções pontuais; </p>
                    <p class="p13 s_light marrom auto top10">4.5.4. Preview de Lançamentos; </p>
                    <p class="p13 s_light marrom auto top10">4.5.5. Promoção Especial no mês do aniversário do Membro.
                    </p>
                    <p class="p13 s_light marrom auto top10">4.5.6. Frete Grátis conforme condições do item 4.6.5; </p>
                    <p class="p13 s_light marrom auto top10">4.5.7. Acesso a convites especiais; </p>



                    <p class="p13 s_light marrom auto top20"><strong>4.6. Para usufruir dos benefícios: </strong> </p>
                    <p class="p13 s_light marrom auto top10">4.6.1. <strong>Descontos nas Lojas Oficiais da TRES®:
                        </strong> os percentuais de descontos em cápsulas, máquinas e acessórios serão aplicados sobre o
                        preço original exposto "não promocionado" no Mercafé, e conforme estipulado em cada nível, não
                        sendo cumulativo com os previstos em promoções pontuais do site, salvo especificação do
                        regulamento da promoção;</p>
                    <p class="p13 s_light marrom auto top10">4.6.2. <strong>Promoções especiais:</strong> o Membro terá
                        a possibilidade de
                        receber/acessar ofertas pontuais e exclusivas das Lojas Oficiais da TRES® a
                        critério da Promotora, podendo ser um cupom/voucher em um valor pré
                        definido na Campanha da Promoção para uso exclusivo em determinada
                        categoria de produtos ou em todas as categorias de produtos existentes Lojas
                        Oficiais da TRES® por um período determinado. Também poderá ser
                        oferecido, a critério da Promotora, percentual de desconto aplicável a uma
                        determinada categoria ou todas as categorias existentes nas Lojas Oficiais da
                        TRES® por um período determinado. </p>
                    <p class="p13 s_light marrom auto top10">4.6.3. <strong>Preview de Lançamento:</strong> neste
                        benefício, o Membro poderá adquirir
                        produtos de lançamentos da marca TRES® antes da data de lançamento
                        oficial; </p>
                    <p class="p13 s_light marrom auto top10">4.6.4. <strong>Promoção especial no mês do aniversário:
                        </strong> o Membro receberá uma
                        oferta composta por um brinde específico ou cupom de desconto, a ser definido
                        pela Promotora, mediante a realização de uma compra vinculada a um valor
                        mínimo estipulada na comunicação da promoção durante o mês de Aniversário
                        do Membro do CLUBE TRES® e de acordo com a categoria do membro. Os
                        brindes e o valor do cupom de desconto variam de acordo com a categoria do
                        Membro.</p>
                    <p class="p13 s_light marrom auto top10">4.6.5. <strong>Frete Grátis:</strong> este benefício
                        confere ao Membro frete grátis para pedidos feitos por meio das Lojas Oficiais da TRES®, desde
                        que a compra tenha valor acima de R$ 299,00 para membros dos níveis Explorador e Apaixonado e
                        valor acima de R$ 149,00 para membros do nível Entusiasta; </p>
                    <p class="p13 s_light marrom auto top10">4.6.6. <strong>Acesso a convites especiais:</strong> neste
                        benefício o Membro terá a
                        possibilidade de acessar convites especiais (festas de lançamento, almoço ou
                        jantares em parceiros, eventos da marca e etc) através do recebimento de um
                        e-mail marketing explicando a quantidade de convites disponíveis para os
                        primeiros membros que realizarem uma compra nas Lojas Oficiais da TRES®,
                        conforme o número de vagas/convites disponíveis; </p>

                    <p class="p13 s_light marrom auto top10">4.6.7. <strong>Parcerias 3corações:</strong> este
                        benefício
                        dá acesso ao Membro às
                        vantagens selecionadas com parceiros da 3Corações em território nacional. As
                        parcerias serão divulgadas oportunamente pela TRES® aos membros elegíveis
                        a esse benefício. </p>
                    <p class="p13 s_light marrom auto top10">4.6.8. <strong>Cápsula Favorita:</strong> ao se cadastrar
                        no CLUBE TRES®, o Membro
                        poderá identificar o sabor de cápsula que mais gosta ("Capsula Favorita").
                        Desta forma passa a poder adquirir cartuchos de cápsula deste sabor com os
                        descontos previstos para este benefício. Caso o Membro não identifique sua
                        Cápsula Favorita no momento do cadastro, poderá cadastrar quando da
                        primeira compra ou ainda alterá-la a cada 06 (seis) meses.</p>


                    <p class="p13 s_light marrom auto top10">4.7. Os benefícios de cada categoria poderão sofrer
                        alterações, a critério da
                        Promotora, comunicadas com antecedência por e-mail ou no Site e Lojas
                        Oficiais da TRES®. </p>
                    <p class="p13 s_light marrom auto top10">4.8. A validade de cada Caixa cadastrada é de 12 (doze)
                        meses, contados da
                        data do cadastro.</p>
                    <p class="p13 s_light marrom auto top10">4.9. O participante que tiver o cadastro do equivalente de
                        Caixas mínimo
                        exigido para atingir outra categoria de membro, passará imediatamente a ter
                        direito aos benefícios correspondentes à categoria que se enquadrou,
                        independentemente de quantos e quais benefícios o Membro utilizou na
                        categoria anterior.</p>
                    <p class="p13 s_light marrom auto top10">4.10.Os benefícios conquistados neste Programa a partir do
                        cadastro das
                        Caixas deverão ser utilizados no prazo máximo de 12 (doze) meses, contados
                        da data de cadastro da quantidade mínima necessária para resgate da
                        categoria. Após esse prazo, fica expirada a utilização dos benefícios referentes
                        às Caixas cadastradas.</p>
                    <p class="p13 s_light marrom auto top10">4.11. Cada código promocional só poderá ser utilizado uma
                        única vez, e caso o
                        consumidor tente inserir mais de uma vez o mesmo código, o sistema o
                        invalidará, resultando em uma mensagem de erro. </p>
                    <p class="p13 s_light marrom auto top10">4.12. A Promotora não se responsabiliza por problemas,
                        falhas ou
                        funcionamento técnico, de qualquer tipo, em redes de computadores,
                        servidores ou provedores, equipamentos de computadores, hardware ou
                        software, ou erro, interrupção, defeito, atraso ou falha em operações ou
                        transmissões para o correto processamento dos cadastros, incluindo, mas não
                        se limitando, à transmissão imprecisa de cadastros, falha das realizadoras em
                        recebê-los, em razão de problemas técnicos, congestionamento na internet ou
                        no portal ligado ao cadastro, vírus ou falha de programação. </p>

                    <h3 class="upper p20 s_bold amarelo top40">5. BENEFÍCIO EXTRA PARA QUEM ADQUIRE NAS LOJAS OFICIAIS
                        TRES® </h3>
                    <p class="p13 s_light marrom auto top10">5.1. Quando a compra das Caixas individuais for efetuada
                        nas Lojas Oficiais
                        da TRES® o Membro poderá ter contabilizado o dobro do número de Caixas
                        compradas, desde que cadastre o código promocional contido no interior de
                        cada embalagem de Caixa de cápsulas<br><br>

                        Por exemplo: O Membro que comprar 04 (quatro) Caixas de cápsulas nas
                        Lojas Oficiais da TRES® terá automaticamente contabilizado em seu cadastro
                        04 (quatro) Caixas. Após a confirmação de sua compra e decorrência do
                        prazo para devolução, que é de 7 (sete) dias úteis a partir do recebimento
                        dos produtos, o Membro poderá cadastrar os 04 (quatro) códigos
                        promocionais contidos no interior de cada Caixa e assim terá contabilizado em
                        seu cadastro um total de 08 (oito) Caixas pela aquisição de 04 (quatro) Caixas
                        nas Lojas Oficiais da TRES®.</p>

                    <h3 class="upper p20 s_bold amarelo top40">6. REGRAS DE TRANSIÇÃO </h3>
                    <p class="p13 s_light marrom auto top10">6.1. Os membros classificados no regulamento que vigorou
                        até 30/06/2021
                        como Aprendiz e Expert migrarão automaticamente para o nível Explorador. Os
                        membros classificados como Mestre migrarão automaticamente para o nível
                        Apaixonado e os membros classificados como Embaixador migrarão
                        automaticamente para o nível Entusiasta.</p>
                    <p class="p13 s_light marrom auto top10">6.2. O consumidor cadastrado no CLUBE TRES® anterior não
                        precisará
                        efetuar novamente o cadastro, considerando-se aceitos os termos e condições
                        contidos neste regulamento a partir do cadastramento de novas caixas ou
                        utilização dos benefícios aqui elencados. </p>


                    <h3 class="upper p20 s_bold amarelo top40">7. PRAZOS DE VIGÊNCIA, ACÚMULO E USO </h3>
                    <p class="p13 s_light marrom auto top10">7.1. <strong>Validade do Programa:</strong> este Programa
                        vigora por prazo indeterminado a
                        partir de 15/08/2022, excluindo as regras anteriores podendo a Promotora, a
                        qualquer tempo, decidir pela sua suspensão ou término, mediante
                        comunicação no Site (clube.escolhatres.com.br) ou através de e-mail, com
                        antecedência mínima de 30 (trinta) dias. </p>
                    <p class="p13 s_light marrom auto top10">7.1.1. No período de validade do Programa o Membro do
                        CLUBE
                        TRES® poderá
                        usufruir seus benefícios, desde que obedecidos os demais prazos previstos
                        neste Regulamento. Comunicado o término nos moldes acima, o CLUBE TRES®
                        estará definitivamente encerrado, sendo que os benefícios não resgatados
                        serão cancelados. </p>
                    <p class="p13 s_light marrom auto top10">7.2. <strong>Prazo de Acúmulo das Caixas:</strong> para
                        usufruir dos benefícios das diversas
                        categorias, o Membro precisa acumular o equivalente a Caixas nas
                        quantidades previstas no item 4.2 acima no período máximo de 12 (doze)
                        meses. </p>
                    <p class="p13 s_light marrom auto top10">7.3. <strong>Prazo de Uso dos Benefícios:</strong>
                        atingidos os cadastrados de Caixas nas
                        quantidades mínimas de cada categoria, o Membro terá 12 (doze) meses para
                        usufruir seus benefícios na categoria atingida. Expirado esse prazo, se reinicia
                        para o membro a contagem de equivalente Caixas cadastradas para
                        atingimento de sua nova categoria no CLUBE TRES® para os próximos 12
                        (doze) meses</p>
                    <p class="p13 s_light marrom auto top10">7.4. O consumidor desde já reconhece que nenhuma
                        indenização lhe será
                        devida pela Promotora em razão da suspensão ou encerramento do CLUBE
                        TRES®, ou ainda expiração de prazo de acúmulo ou uso dos benefícios, nos
                        termos deste Regulamento. </p>

                    <h3 class="upper p20 s_bold amarelo top40">8. CUMULATIVIDADE </h3>
                    <p class="p13 s_light marrom auto top10">8.1. Os descontos do CLUBE TRES® não serão utilizados
                        cumulativamente
                        com outros descontos das Lojas Oficiais da TRES®., exceto se divulgado de
                        forma diversa pela Promotora.</p>

                    <h3 class="upper p20 s_bold amarelo top40">9. EXCLUSÃO DO PROGRAMA: </h3>
                    <p class="p13 s_light marrom auto top10">9.1. Os participantes poderão ser excluídos
                        automaticamente
                        do CLUBE
                        TRES®®, tendo suas respectivas contas encerradas, sem direito a qualquer
                        tipo de indenização, em caso de suspeita de fraude ou qualquer tentativa de
                        ato de má-fé, podendo ainda responder por crime de falsidade ideológica ou
                        documental. Também nos casos de não preenchimento dos requisitos
                        previamente determinados e/ou em decorrência da prestação de informações
                        incorretas ou equivocadas, de acordo com as regras do Programa, serão
                        inválidas as participações.</p>
                    <p class="p13 s_light marrom auto top10">9.2. A Promotora reserva-se ao direito de desclassificar
                        os
                        participantes que
                        violem ou tentem violar o presente Regulamento e eventuais alterações
                        posteriores.</p>

                    <h3 class="upper p20 s_bold amarelo top40">10. DISPOSIÇÕES GERAIS </h3>
                    <p class="p13 s_light marrom auto top10">10.1. O simples ato de inscrição no CLUBE TRES® pressupõe
                        total
                        conhecimento e concordância com as disposições deste Regulamento, por
                        parte do participante.</p>
                    <p class="p13 s_light marrom auto top10">10.2. O benefício é pessoal, intransferível e não poderá
                        ser convertido, total ou
                        parcialmente em dinheiro, sendo vedada qualquer forma de cessão ou
                        transferência, pelo participante, a terceiros, sucessores ou herdeiros. </p>
                    <p class="p13 s_light marrom auto top10">10.3. Ao resgatar o benefício, o custo com a taxa de
                        entrega do produto
                        escolhido será de total responsabilidade do participante beneficiário, exceto se
                        a categoria do Membro prever frete grátis.</p>
                    <p class="p13 s_light marrom auto top10">10.4. A Promotora não poderá ser responsabilizada por
                        perda, roubo, furto,
                        danos morais ou materiais, ou preenchimento incorreto dos requisitos
                        obrigatórios por parte do beneficiário da presente Campanha, e reserva-se ao
                        direito de cancelar a oferta ou alterar o presente Regulamento, em casos de
                        caso fortuito ou força maior. </p>
                    <p class="p13 s_light marrom auto top10">Em relação ao uso e armazenamento de seus dados pessoais,
                        os
                        Membros declaram que leram e compreenderam a Política de Privacidade
                        TRES®, disponíveis nas Lojas Oficiais da TRES®: <br>
                        <a
                            href="https://loja.escolhatres.com.br/institucional/politica-de-privacidade">https://loja.escolhatres.com.br/institucional/politica-de-privacidade</a><br>
                        <a
                            href="https://www.mercafe.com.br/Institucional/politica-de-privacidade">https://www.mercafe.com.br/Institucional/politica-de-privacidade</a>
                        <br>
                    </p>
                    <p class="p13 s_light marrom auto top10">10.6. Eventuais dúvidas sobre o CLUBE TRES® poderão ser
                        esclarecidas junto
                        ao Serviço de Apoio, pelo telefone 0800 979 2021 (de segunda a sexta das 8h
                        às 18h e sábado e domingo das 8h às 12h) ou pelo e-mail clube@escolhatres.com.br.</p>
                    <p class="p13 s_light marrom auto top10">10.7. Qualquer má interpretação ou tentativa fraudulenta
                        para o não
                        cumprimento, na íntegra, do presente Regulamento invalidará,
                        automaticamente, a possibilidade de o Membro usufruir dos benefícios, não
                        respondendo a Promotora por eventuais equívocos do beneficiário.</p>
                    <p class="p13 s_light marrom auto top10">10.8. Este regulamento não implica em qualquer tipo de
                        concurso, vale-brinde,
                        sorteio ou operação assemelhada e independe de qualquer modalidade de
                        sorte ou competição, não estando, portanto, sujeita à autorização prévia
                        estabelecida na Lei nº 5.768/71 e do Decreto nº. 70.951/72, beneficiando
                        indistintamente a todos que cumprirem ao aqui disposto. </p>
                    <p class="p13 s_light marrom auto top10">10.9. Os casos omissos e não previstos neste Regulamento
                        serão
                        solucionados por uma comissão formada pela administração do CLUBE
                        TRES®, com prudência e razoabilidade, tendo suas decisões caráter definitivo
                        e irrecorrível.</p>
                    <p class="p13 s_light marrom auto top10">10.10. Fica, desde já, eleito o foro da Comarca do
                        domicílio do participante
                        para solução de quaisquer questões referentes ao presente Programa.</p>
                    <p class="p13 s_light marrom auto top10">10.11. O presente Regulamento cancela e substitui qualquer
                        regulamento
                        anterior.</p>
                    <p class="p13 s_light marrom auto top10">10.12. São empresas que compõem o Grupo 3corações para
                        efeitos deste Regulamento: </p>
                    <p class="p13 s_light marrom auto top10">TRÊS CORAÇÕES ALIMENTOS S/A., pessoa jurídica de direito
                        privado, com
                        sede localizada na Rua Santa Clara, n° 100, Parque Santa Clara, Eusébio/CE,
                        inscrita no CNPJ/MF sob o n.º 63.310.411/0001-01, E SUAS FILIAIS.</p>
                    <p class="p13 s_light marrom auto top10">CAFÉ TRÊS CORAÇÕES S.A., pessoa jurídica com sede na
                        cidade
                        de Santa
                        Luzia/MG, à Av. Brasília, nº. 5.145, Bairro São Benedito, CEP: 33.170-000,
                        inscrita no CNPJ/MF nº. 17.467.515/0001-07, E SUAS FILIAIS. </p>
                    <p class="p13 s_light marrom auto top10">PRINCIPAL COMÉRCIO E INDÚSTRIA DE CAFÉ LTDA., sociedade
                        empresária limitada, inscrita no CNPJ/MF sob o nº 30.740.773/0001-75,
                        estabelecida em Nova Iguaçu-RJ na Rua Oscar Soares (Continuação como Est
                        Dr Plínio Casado), nº 1416, Parte 1, Bairro Centro, E SUAS FILIAIS.</p>
                    <p class="p13 s_light marrom auto top10">CAFÉ BRASILEIRO ALIMENTOS LTDA., sociedade limitada, com
                        sede na
                        cidade de Eusébio-CE, à Rua Santa Clara, nº 101, Mezanino, Sala 01, Parque
                        Santa Clara, inscrita no CNPJ/MF sob o nº 58.128.190/0001-07, E SUAS
                        FILIAIS. </p>


                    <br><br>
                    <a href="https://clube.escolhatres.com.br/regulamento/politica_de_privacidade">&gt; Conheça nossa
                        política de privacidade </a>


                </div>

            </div>

        </div>
    </div>
@endsection