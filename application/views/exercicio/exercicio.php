<section id="exercicio">
    <div class="container" >
        <div class="row">
            <div>
                <div class="panel-heading">
                    <h3 class="panel-title textDourado">EXERCÍCIO <?php echo $exercicio->id ?></h3>
                </div>
                <div class="panel-body">
                    <div class=" col-xs-11">
                        <h3 class=""><?php echo $exercicio->descricao ?></h3>
                    </div>            

                    <div class="col-xs-1" >
                        <button type="button" class="btn btnExercicio" data-toggle="modal" data-target="#ModalDica">Dica</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#222222">
                    <h3 class="panel-title textExer" id="click_advance"><i class="fa fa-sort-up textPgExercicio"></i>&nbsp;&nbsp;&nbsp;Universo</h3>
                </div>
                <div class="panel-body" >
                    <div class="col-xs-12" id="display_advance">
                        <?php foreach ($elementosUniverso as $row): ?>
                            <img src="<?= base_url($row->imagem ) ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                    <!-- <div class="col-xs-2" >
                        <button type="button" class="btn btn-info " data-toggle="collapse" data-target="#demo">Universo</button>
                    </div> -->
                </div>
            </div>
        </div>


        <div class="row">

            <!-- PAINEL DE CONSTRUTOR DE ESTAGIO -->
            <div id="construtor-estagio" class="panel panel-default">
                <div class="panel-heading"  style="background-color:#222222">
                    <h3 class="panel-title textExer">Construção da solução</h3>
                </div>
                <div class="panel-body">

                    <div class="col-xs-12 text-center" >
                        <button id="btn-iniciar-estagio" type="button" class="btn btnExercicio">Iniciar 1° Estágio</button>
                    </div>

                    <div class="estagio-passo-1 collapse">
                        <div class="col-sm-12">
                            <label class="col-sm-10 textDourado desc-estagio" >Estágio 1</label>
                            <div class="col-sm-2 text-center" >
                                <button type="button" class="btn btnExercicio bottom-right" id="limpar-estagio" > 
                                <span class="glyphicon glyphicon-refresh"></span></button>
                            </div> 
                            <div class="col-xs-12" >
                                <div>
                                    <form class="form-horizontal form-condicao-ajax" method="post" action="" >

                                        <input type="hidden" name="universo_id" value="<?php echo $exercicio->universo_id ?>" />

                                        <label class="col-sm-12 textPreto" >Passo 1: Definir restrição</label>
                                        <div class="col-sm-12  form-group">
                                            <label class="col-sm-2" for="num_elementos">Eu quero:</label>

                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="num_elementos" id="num_elementos" />
                                            </div>

                                            <label class="col-sm-4" for="num_propriedades">elemento(s) que verifique(m):</label>


                                            <div class="col-sm-5">
                                                <select class="form-control" name="num_propriedades" id="num_propriedades">
                                                    <option value = 0 selected>Nenhuma propriedade</option>
                                                    <option value = 1 >Uma propriedade</option>
                                                    <option value = 2>Duas propriedade</option>
                                                </select>
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-12  form-group" id="divCondicao">

                                            <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos:</label>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="atributo" id="atributo">
                                                    <option value='' > - Selecione - </option>
                                                    <?php foreach ($chaves as $row): ?>
                                                        <option value='<?php echo ($row->chave) ?>' ><?php echo ($row->chave_desc) ?></option>
                                                    <?php endforeach; ?>
                                                    
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="pertence" id="pertence">
                                                    <option value='true' >é</option>
                                                    <option value='false' >não é</option>
                                                    <option value='true' >está</option>
                                                    <option value='false' >não está</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="caracteristica" id="caracteristica">
                                                    <!-- o conteudo de esse select eh gerado dinamicamente  -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 form-group" id="divCondicao2" style="display:none;">

                                            <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos da segunda condição:</label>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="atributo2" id="atributo2">
                                                    <option value='' > - Selecione - </option>
                                                    <?php foreach ($chaves as $row): ?>
                                                        <option value='<?php echo ($row->chave) ?>' ><?php echo ($row->chave_desc) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="pertence2" id="pertence2">
                                                    <option value='true' >é</option>
                                                    <option value='false' >não é</option>
                                                    <option value='true' >está</option>
                                                    <option value='false' >não está</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="caracteristica2" id="caracteristica2">
                                                    <!-- o conteudo de esse select eh gerado dinamicamente  -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="padding-bottom: 10px;">
                                            <input id="btn-valida-restricao" type="submit" name="enviarValida" value="Validar Restrição"  class="btn btn-default"/>
                                        </div>
                                    </form>
                                </div>


                                <hr>

                                <form class="form-validar-estagio-ajax" method="post" action="">
                                    <div class="collapse estagio-passo-2">
                                        <label class="col-sm-12 textPreto" >Passo 2: Definir formula</label>

                                        <div class="form-horizontal ">
                                        <div class="col-sm-12  form-group">
                                            <label class="col-sm-2" for="formula">Formula:</label>

                                            <div class="col-sm-2">
                                                <select class="form-control" id="formula" name="formula">
                                                    <option value = 'n'>Valor</option>
                                                    <option value = 'C(n,p)'>C(n,p)</option>
                                                    <option value = 'A(n,p)'>A(n,p)</option>
                                                    <option value = 'p!'>p!</option>
                                                </select>
                                            </div>


                                            <label class="col-sm-1" for="n" id="label_n" >n:</label>

                                            <div class="col-sm-2">
                                                <select class="form-control" id="n" name="n">
                                                    <option value = '1'>1</option>
                                                    <option value = '2'>2</option>
                                                    <option value = '3'>3</option>
                                                    <option value = '4'>4</option>
                                                    <option value = '5'>5</option>
                                                    <option value = '6'>6</option>
                                                    <option value = '7'>7</option>
                                                    <option value = '8'>8</option>
                                                    <option value = '9'>9</option>
                                                    <option value = '10'>10</option>
                                                    <option value = '11'>11</option>
                                                    <option value = '12'>12</option>
                                                    <option value = '13'>13</option>
                                                    <option value = '14'>14</option>
                                                    <option value = '15'>15</option>
                                                    <option value = '16'>16</option>
                                                    <option value = '17'>17</option>
                                                    <option value = '18'>18</option>
                                                    <option value = '19'>19</option>
                                                    <option value = '20'>20</option>
                                                    <option value = '21'>21</option>
                                                    <option value = '22'>22</option>
                                                </select>
                                            </div>


                                            <label class="col-sm-1" for="p" id="label_p">p:</label>

                                            <div class="col-sm-2">
                                                <select class="form-control" id="p" name="p">
                                                    <option value = '1'>1</option>
                                                    <option value = '2'>2</option>
                                                    <option value = '3'>3</option>
                                                    <option value = '4'>4</option>
                                                    <option value = '5'>5</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="well-sm" id="formula-definida"></div>
                                            </div>

                                        </div>
                                        </div>
                                        <div class="col-sm-12 text-center" >
                                            <button type="submit" class="btn btnExercicio bottom-right" id="validar-estagio">Validar estagio</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <!-- PAINEL DE LISTA DE ESTAGIOS -->
            <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#222222">
                    <h3 class="panel-title textExer">Lista de estagios</h3>
                </div>
                <div class="panel-body">

                    <div>
                        <div class="col-xs-9">
                            <!-- LISTA DE ESTAGOS COMPLETADOS-->
                            <div id="lista-estagios">
                                <!-- esta lista sera prenchida com elementos do tipo item-estagio (id=estagio-base) -->
                            </div>

                            <!-- ITEM ESTAGIO (nao visivel)-->
                            <div id="estagio-base" class="item-estagio collapse col-sm-12" >
                                <div class="descricao col-sm-8">
                                    <!-- conteudo gerado no javascript -->
                                </div>
                                <div class="acoes col-sm-4">
                                    <input type="button" class="estagio-btn-elementos btn btn-default" value="Ver Elementos" />
                                    <input type="button" class="estagio-btn-deletar btn btn-default" value="Deletar" />
<!--                                    <input type="button" class="estagio-btn-ver btn btn-default" value="Consultar" />-->
                                </div>
                                <br/>
                            </div>

                        </div>
                        <div class="col-xs-3">

                            <div class="row">
                            <label class="col-sm-12" for="relacionamento">Relacione estágios:</label>

                            <div class="col-sm-12">

                                <label><input type="radio" id="relacionamento" name="relacionamento" value="S">Soma</label>

                                <label><input type="radio" id="relacionamento" name="relacionamento" value="M">Multiplicacao</label>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12" >
                                    <button type="button" class="btn btnExercicio" id="finalizar">Finalizar</button>
                                    <!--<a href="<?php echo site_url("indicador") ?>"><button type="button" class="btn btnExercicio" >Indicador</button></a>-->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<?php $this->load->view('/exercicio/modais/dica.php'); ?>
<?php $this->load->view('/exercicio/modais/formula.php'); ?>
<?php $this->load->view('/exercicio/modais/tutorial.php'); ?>
<?php $this->load->view('/exercicio/modais/universo.php'); ?>
<?php $this->load->view('/exercicio/modais/sub-universo.php'); ?>


<!-- JS para validar condição -->


<script type="text/javascript">

    /**
     * representa o div do construtor do estagio atual
     */
    var div_construtor_estagio = $("#construtor-estagio");
    //adicionamos uma propriedade para indicar que o div esta pronto para iniciar a construcao de estagio
    div_construtor_estagio.estado = 'PRONTO';


    /**
     * Lista de estagios retornados quando a validacao de estagio esta OK
     * @type {Array}
     */
    var lista_estagios = new Array();

    /**
     * Contem os elementos do universo do exercicio
     *
     */
    var elementos_do_universo =  new Array();


    /**
     * numero de estagio atual
     * @type {number}
     */
    var numero_estagio_atual = 0;


    jQuery(document).ready(function () {

        /**
         * Inicia estagio
         */
        $("#btn-iniciar-estagio").click(function () {
            inicializaConstrutorEstagio();
        });


        jQuery(document).find('#num_propriedades').change(function() {
            var valor = $(this).val();
            trocaPropriedade(valor);
        });

        /**
         * Finalizar exercicio
         */
        jQuery(document).find('#finalizar').click(function () {
            finaliza();
        });

        /**
         * Troca dinamicamente os valores e predicados a serem exibidos, de acordo
         * com a opção selecionada pelo usuário 
        */
        jQuery(document).find('#atributo').change(function () {
            trocaCaracteristica($(this).val(),"#caracteristica");
         });
         
        jQuery(document).find('#atributo2').change(function () {            
            trocaCaracteristica($(this).val(),"#caracteristica2");
        });

        /**
         * valida restricao
         */
        jQuery(document).find('.form-condicao-ajax').submit(function () {
            var dadosCondicao = jQuery(this).serialize();

            if ($('#btn-valida-restricao').val() == 'Validando...') {
                return (false);
            }

            //se nao for valido nao enviamos o ajax
            if(!validaFormularioCondicao()){
                return (false);
            }

            $('#btn-valida-restricao').val('Validando...');

            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/ValidaCondicao",
                dataType: 'html',
                data: dadosCondicao,
                beforeSend: mostraEspera,
                complete: escondeEspera,
                success: function (data)
                {
                    var data = JSON.parse(data);
                    var estado = data.estado;

                    if(estado == 'OK'){
                        div_construtor_estagio.find(".estagio-passo-2").show();
                        $('#btn-valida-restricao').val('Restrição Validada');
                        desativaFormularioRestricao();
                    }else{
                        alert(data.mensagem);
                        $('#btn-valida-restricao').val('Validar Restrição');
                    }

                }
            });
            return false;
        });

        /**
         * valida estagio
        */
        jQuery(document).find('.form-validar-estagio-ajax').submit(function () {

            div_construtor_estagio.find('#validar-estagio').val('Validando...');

            var dadosCondicao = jQuery(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/ValidaEstagio",
                dataType: 'html',
                data: dadosCondicao,
                beforeSend: mostraEspera,
                complete: escondeEspera,
                success: function (data)
                {
                    var data = JSON.parse(data);
                    if(data.estado == 'OK'){
                        //adicionamos o estagio retornado a lista de estagios finalizados
                        adicionaEstagio(data.estagio);
                        novoConstrutorEstagio();
                        listaEstagios();
                    }else{
                        alert(data.mensagem);
                    }


                }
            });

            return false;

        });

        /*
        *Limpa campos preenchidos na construção do exercício 
         */
        jQuery(document).find('#limpar-estagio').click(function () {
            limpaConstrutorEstagio();
             
        });

        /**
         * Adiciona interacao quando a formula selecionada mostra ou nao "n" ou "p" e tambem modifica o valor final da formula
         */
        jQuery(document).find('#formula').change(function () {
            trocaFormula($(this).val());
            trocarValorFormula();
        });

        /**
         * Mudanca no valor de "n" modifica o valor final da formula
         */
        jQuery(document).find('#n').change(function () {
            trocarValorFormula();
        });

        /**
         * Mudanca no valor de "p" modifica o valor final da formula
         */
        jQuery(document).find('#p').change(function () {
            trocarValorFormula();
        });



        /**
         ***************************** FUNCOES AUXLIARES ***************************
         */

        /**
         * Verifica se a construcao de estagio esta em progresso
         */
        function inicializaConstrutorEstagio(){
            if(div_construtor_estagio.estado == 'PRONTO' ){

                limpaConstrutorEstagio();

                div_construtor_estagio.estado = 'INICIADO';
                //atualizamos o numero de estagio atual
                numero_estagio_atual = lista_estagios.length + 1; //Se lista de estagios estiver vazia, sera 0 + 1


                //desativa o botao de criacao de estagio
                div_construtor_estagio.find("#btn-iniciar-estagio").first().prop("disabled",true);

                atualizarOrdemEstagios(true);
            }else{
                alert("O estagio "+ numero_estagio_atual+ " nao foi encerrado.");
            }
        }

        /**
         * Quando um estagio é validado pelo icomb, permitimos a construcao de um novo estagio
         */
        function novoConstrutorEstagio(){
            div_construtor_estagio.estado = 'PRONTO';

            //ativa novamente o botao de criacao de estagio
            div_construtor_estagio.find("#btn-iniciar-estagio").first().prop("disabled",false);

            atualizarOrdemEstagios();

            // ocultamos o passo 1 ate o usuario indicar o inicio do proximo estagio
            var div_construtor_estagio_paso1= div_construtor_estagio.find(".estagio-passo-1").first();
            div_construtor_estagio_paso1.hide();
        }

        /**
         * Limpamos o panel de construcao de estagio para o estado original
         */
        function limpaConstrutorEstagio(){
            //limpamos o passo 1
            var div_construtor_estagio_passo1= div_construtor_estagio.find(".estagio-passo-1");
            div_construtor_estagio_passo1.find("#num_elementos").val("");

            div_construtor_estagio_passo1.find("#num_propriedades").val(1); //trocamos para uma propriedade
            trocaPropriedade(1);

            div_construtor_estagio_passo1.find("#atributo").val("");

            div_construtor_estagio_passo1.find("#pertence").val("");
            //tiramos a selecao de caracteristicas, forcando o usuario selecionar primeiro a chave
            div_construtor_estagio_passo1.find("#caracteristica").empty();

            div_construtor_estagio_passo1.find('#btn-valida-restricao').val('Validar Restrição');


            div_construtor_estagio_passo1.find("#atributo2").val("");
            div_construtor_estagio_passo1.find("#pertence2").val("");
            //tiramos a selecao de caracteristicas, forcando o usuario selecionar primeiro a chave
            div_construtor_estagio_passo1.find("#caracteristica2").empty();

            // mostramos o passo 1
            div_construtor_estagio_passo1.show();

            //limpamos o passo 2
            var div_construtor_estagio_passo2= div_construtor_estagio.find(".estagio-passo-2");
            div_construtor_estagio_passo2.find("#formula").val("");
            div_construtor_estagio_passo2.find("#n").val("");
            div_construtor_estagio_passo2.find("#p").val("");
            //mostrando n ou p para formula default
            trocaFormula('n'); // identificador da formula valor

            //ocultamos o passo 2
            div_construtor_estagio_passo2.hide();

            ativaFormularioRestricao();
        }

        /**
         * mostra ou oculta os selects para n ou p, dependendo da formula
         */
        function trocaFormula(formula) {
            //limitamos a busca de id dentro do div "estagio-passo-2"
            var div_construtor_estagio_passo2= div_construtor_estagio.find(".estagio-passo-2");
            if(formula == 'n' || formula == 'p!'){
                //mostramos somente n
                div_construtor_estagio_passo2.find("#n").show();
                div_construtor_estagio_passo2.find("#label_n").show();
                div_construtor_estagio_passo2.find("#p").hide();
                div_construtor_estagio_passo2.find("#label_p").hide();
            }else{
                //mostramos n e p
                div_construtor_estagio_passo2.find("#n").show();
                div_construtor_estagio_passo2.find("#label_n").show();
                div_construtor_estagio_passo2.find("#p").show();
                div_construtor_estagio_passo2.find("#label_p").show();
            }

        }

        /**
         * busca na lista de estagios pelo numero de estagio e retorna o elemento estagio
         */
        function encontraEstagioPorNumero(estagio_numero) {
            for (var i = 0, len = lista_estagios.length; i < len; i++) {
                if (lista_estagios[i].numero === estagio_numero)
                    return lista_estagios[i]; // Return as soon as the object is found
            }
            return null; // The object was not found
        }

        /**
         * Dentro do estagio temos a lista de elementos que foram selecionados pela condicao.
         * Com esta funcao vamos procurar nessa lista por um determinado id de elemento.
         * Se existe retorna true caso contrario false.
         */
        function consultaGabarito(elemento_id, estagio) {
            var resultado = false;
            $.each(estagio.elementos_selecionados, function(estagio_key, estagio_value){
                if(elemento_id == estagio_value.id){
                    resultado  = true;
                }
            });
            return resultado;
        }

        /**
         * Muda o valor final da formula
         */
        function trocarValorFormula(){
            var n = div_construtor_estagio.find(".form-validar-estagio-ajax").find("#n").val();
            var p = div_construtor_estagio.find(".form-validar-estagio-ajax").find("#p").val();
            var formula = div_construtor_estagio.find(".form-validar-estagio-ajax").find("#formula").val();
            formula = formula.replace("n", n);
            formula = formula.replace("p", p);
            div_construtor_estagio.find(".form-validar-estagio-ajax").find("#formula-definida").text(formula);
        }

        trocarValorFormula();

        /**
         * Evento click no botao de clase estagio-btn-elementos, mostramos o modal mostrando todos os elemetnos do  universo
         * e resaltando os elemtnsos que cumprem a condicao selecionada no estagio
         */
        function mostraSubUniverso(){

            //recuperamos o estagio-numero que corresponde ao botao selecionado
            var estagio_numero = parseInt($(this).parent().parent().attr("estagio-numero"));

            //recuperamos os estagio que contem, entre outras coisas, a lista elementos que cumprem com a restricao
            var estagio = encontraEstagioPorNumero(estagio_numero);

            var conteudo_do_modal ="";


            $.each(elementos_do_universo, function(universo_key, universo_value){
                /*versao com esurecimento*/
                /*
                if(consultaGabarito(universo_value.id, estagio)){

                    conteudo_do_modal += '<div class="pull-left elemento_universo elemento_universo_destacado" ><img class="img-responsive" src="'+'http://localhost/icombh5/'+universo_value.imagem+'" /></div>';
                }else{
                    conteudo_do_modal += '<div class="pull-left elemento_universo elemento_universo_escondido" ><img class="img-responsive" src="'+'http://localhost/icombh5/'+universo_value.imagem+'" /></div>';
                }
                */

                if(consultaGabarito(universo_value.id, estagio)){
                    conteudo_do_modal += '<img class="elemento_universo elemento_universo_destacado " src="'+'http://localhost/icombh5/'+universo_value.imagem+'" />';
                }else{
                    conteudo_do_modal += '<img class="elemento_universo elemento_universo_ofuscado " src="'+'http://localhost/icombh5/'+universo_value.imagem+'" />';
                }
            });

            //chamamos o metodo utlitario que mostra o modal com nosso conteudo dinamico.
            doModal('sub-universo',conteudo_do_modal);
        }


        function deletarEstagio(){
            //recuperamos o estagio-numero que corresponde ao botao selecionado
            var pai = $(this).parent().parent();
            var estagio_numero = parseInt(pai.attr("estagio-numero"));

            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/EliminarEstagio",
                dataType: 'html',
                data: "estagio_a_deletar="+estagio_numero,
                beforeSend: mostraEspera,
                complete: escondeEspera,
                success: function (data)
                {
                    var data = JSON.parse(data);
                    if(data.estado == 'OK'){
                        //esconde o estagio da view
                        pai.hide();

                        //muda o estado do estagio da lista de estagios do javascript
                        $.each(lista_estagios, function(estagio_key, estagio_value){
                            if(estagio_value.numero ==  estagio_numero){
                                estagio_value.estado = 'DELETADO';
                            }
                        });

                        alert(data.mensagem);

                        atualizarOrdemEstagios();

                        listaEstagios();

                    }else{
                        alert(data.mensagem);
                    }


                }
            });
        }

        /**
         * Ao validar ou deletar um estagio essa funcao modifica o texto do botao iniciar estagio, para manter
         * a coorencia para o usuario
         *
         * se passado mudartexto = true ele vai colocar o texto como em contrucao
         */
        function atualizarOrdemEstagios(mudartexto){
            var contador_estagios_visiveis = 0;
            $.each(lista_estagios, function(estagio_key, estagio_value){
                if(estagio_value.estado ==  "DELETADO"){
                    console.log("estagio "+estagio_value.numero+" deletado")
                }else{
                    contador_estagios_visiveis++;
                    estagio_value.ordem = contador_estagios_visiveis;
                }
            });

            var proxima_ordem_estagio = contador_estagios_visiveis + 1;

            div_construtor_estagio.find("#btn-iniciar-estagio").text('Iniciar '+proxima_ordem_estagio+'° Estágio');
            if(mudartexto){
                div_construtor_estagio.find("#btn-iniciar-estagio").first().text(' Estágio '+proxima_ordem_estagio+'° em construcao');
            }

            div_construtor_estagio.find(".desc-estagio").text('Estágio ' + proxima_ordem_estagio);

        }

        /**
         * Este metodo adiciona estagios "ja validados" pelo iComb a nossa lista de estagios.
         * cada novo estagio adicionado é mantido dentro do div "lista-estagios" cada um com suas opcoes de
         */
        function adicionaEstagio(estagio){

            if(estagio.estado=='FINALIZADO'){
                lista_estagios.push(estagio);
            }
        }

        /**
         * Lista os estagios finalizados
         */
        function listaEstagios(){

            //limpamos o conteudo da lista de estagios
            $('#lista-estagios').empty();

            //atualiza lista de estagios com os estagios em estado finalizado (vai ignorar os deletados)
            $.each(lista_estagios, function(estagio_key, estagio){

                if(estagio.estado == 'FINALIZADO'){
                    //estagio base => é a base de toda lista de estagios
                    var estagio_div = $('#estagio-base').clone();

                    //substituimos o id do div por um novo chamado estagio-1 para o primeiro e assim por diante.
                    estagio_div.prop('id','estagio-'+estagio.numero);

                    //adicionamos um atributo html para identificar o estagio facilmente
                    estagio_div.attr('estagio-numero',estagio.numero);

                    //adicionamos evento click para o botao "ver elementos" que executa a funcao "mostraSubUniverso"
                    estagio_div.find(".estagio-btn-elementos").first().click(mostraSubUniverso);


                    estagio_div.find(".estagio-btn-deletar").first().click(deletarEstagio);

                    var estagio_base_desc = estagio_div.find('.descricao');
                    estagio_base_desc.append(estagio.ordem+'º Estágio:'+'<p>'+ estagio.elementos_selecionados.length+' elemento(s) cumpre(m) a(s) seguinte(s) condição(ões):</p>');

                    if(estagio.condicao.expressoes != undefined){

                        if(estagio.condicao.expressoes.length>0){
                            estagio_base_desc.append('<ol>');
                            $.each( estagio.condicao.expressoes, function( key, expressao ){
                                estagio_base_desc.append('<li>'+expressao.texto+'</li>');
                            });
                            estagio_base_desc.append('</ol>');
                        }else{
                            estagio_base_desc.append('Nenhuma condicao aplicada.');
                        }

                    }else{
                        estagio_base_desc.append('Nenhuma condicao aplicada.');
                    }

                    $('#lista-estagios').append(estagio_div);
                    //fazemos aparecer
                    estagio_div.toggle();
                }
            });
        }



        /**
         * Controle de mostrar as propriedades
         */
        function trocaPropriedade(valor){
            $("#divCondicao").hide();
            $("#divCondicao2").hide();
            if (valor == 1){
                $("#divCondicao").show();
            }else if (valor == 2){
                $("#divCondicao").show();
                $("#divCondicao2").show();
            }
        }

        //sempre mostramos o primeira condicao
        $("#divCondicao").show();
        $("#divCondicao2").hide();

        /**
         * Controle para expandir universo
         */
        $('#click_advance').click(function() {
            $('#display_advance').toggle('1000');
            $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
        });

    });



    function mostraEspera(){
        waitingDialog.show('Carregando ...');

    }

    function escondeEspera(){
        waitingDialog.hide();
    }

    /**
     * Metodo que cria um modal temporariamente com o conteudo que for enviado
     */
    function doModal(heading, formContent) {
        var html =  '<div id="dynamicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirm-modal" aria-hidden="true">';
        html += '<div class="modal-dialog">';
        html += '<div class="modal-content">';
        html += '<div class="modal-header">';
        html += '<a class="close" data-dismiss="modal">×</a>';
        html += '<h4>'+heading+'</h4>'
        html += '</div>';
        html += '<div class="modal-body">';
        html += formContent;
        html += '</div>';
        html += '<div class="modal-footer">';
        html += '<span class="btn btn-primary" data-dismiss="modal">Fechar</span>';
        html += '</div>';  // content
        html += '</div>';  // dialog
        html += '</div>';  // footer
        html += '</div>';  // modalWindow
        $('body').append(html);
        $("#dynamicModal").modal();
        $("#dynamicModal").modal('show');
        $('#dynamicModal').on('hidden.bs.modal', function (e) {
            $(this).remove();
        });

    }
    /**
     * Adicionamos os elementos para a lista delementos de universo
     */
    <?php foreach ($elementosUniverso as $row): ?>
        elementos_do_universo.push(
                {
                    "id": "<?=$row->id?>",
                    "imagem" : "<?=$row->imagem?>"
                }
        );
    <?php endforeach; ?>




    function trocaCaracteristica(valor,nomedoselectparatrocar){

        var select_caracteristica = jQuery(document).find(nomedoselectparatrocar);
        //sempre limpamos em caso que tenha selecionado o valor vazio o conteudo do selec atributos vai sumir
        select_caracteristica.empty();
        if(valor !=  ""){
            //somente procuramos os atributos se o usuario selecionou qualquer coisa menos vazio
            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/trocaChaves/<?php echo $exercicio->universo_id ?>/"+valor,
                beforeSend : mostraCarregandoModal,
                complete: escondeCarregandoModal,
                beforeSend: mostraEspera,
                complete: escondeEspera,
                success: function (data)
                {
                    $.each(data, function(data_key, data_value){
                        select_caracteristica.append($('<option>', {
                            value: data_value.valor,
                            text : data_value.valor
                        }));
                    });
                }
            });
        }
    }

    function alertaCampoComErro(elemento){
        elemento.animate({backgroundColor:'rgba(239, 92, 92, 0.77)'},200).delay(1000).animate({backgroundColor:''},200);
    }

    /**
     * retorna true se a validacao estiver OK
     */
    function validaFormularioCondicao(){

        if ($('#num_elementos').val() == '') {
            alertaCampoComErro($('#num_elementos'));
            return (false);
        }

        if($("#num_propriedades").val()==1){

            if ($('#atributo').val() == '') {
                alertaCampoComErro($('#atributo'));
                return (false);
            }

            if ($('#caracteristica').val() == '') {
                alertaCampoComErro($('#caracteristica'));
                return (false);
            }
        }

        if($("#num_propriedades").val()==2){

            if ($('#atributo').val() == '') {
                alertaCampoComErro($('#atributo'));
                return (false);
            }

            if ($('#caracteristica').val() == '') {
                alertaCampoComErro($('#caracteristica'));
                return (false);
            }

            if ($('#atributo2').val() == '') {
                alertaCampoComErro($('#atributo2'));
                return (false);
            }

            if ($('#caracteristica2').val() == '') {
                alertaCampoComErro($('#caracteristica2'));
                return (false);
            }
        }

        //nao deu erro retornamos true
        return true;

    }

    function desativaFormularioRestricao(){
        $("#num_elementos").prop("disabled", true);
        $("#num_propriedades").prop("disabled", true);
        $("#atributo").prop("disabled", true);
        $("#caracteristica").prop("disabled", true);
        $("#pertence").prop("disabled", true);
        $("#atributo2").prop("disabled", true);
        $("#caracteristica2").prop("disabled", true);
        $("#pertence2").prop("disabled", true);
        $("#btn-valida-restricao").prop("disabled", true);
    }

    function ativaFormularioRestricao(){
        $("#num_elementos").prop("disabled", false);
        $("#num_propriedades").prop("disabled", false);
        $("#atributo").prop("disabled", false);
        $("#caracteristica").prop("disabled", false);
        $("#pertence").prop("disabled", false);
        $("#atributo2").prop("disabled", false);
        $("#caracteristica2").prop("disabled", false);
        $("#pertence2").prop("disabled", false);
        $("#btn-valida-restricao").prop("disabled", false);
    }



    function mostraCarregandoModal(){
        //carregandoModal.show('Custom message', {dialogSize: 'sm', progressType: 'warning'});
    }
    function escondeCarregandoModal(){
        //carregandoModal.hide();
    }
    function finaliza(){
        var relacionamento = $('input[name=relacionamento]:checked').val();
        if(relacionamento == undefined || relacionamento==''){
            alert("Selecione a operação entre estagios");
            return (false);
        }

        //somente procuramos os atributos se o usuario selecionou qualquer coisa menos vazio
        $.ajax(
            {
                type: "POST",
                url: "<?= base_url()?>/exercicio/Finaliza",
                data: "relacionamento="+relacionamento,
                beforeSend: mostraEspera,
                complete: escondeEspera,
                success: function(data){
                    if(data.estado == 'OK'){

                        modalResultadoExercicio('Resultado final',"<a class=\"btn btn-primary\"  href='<?= base_url()?>/indicador'>Parabens, voce acertou! Clique aqui para ver os detalhes</a>");

                    }else{
                        alert(data.mensagem);
                    }
                }
            }
        );
    }


    /**
     * Metodo que cria um modal para mostrar o resultado do exercicio que ele acaba de realizar
     */
    function modalResultadoExercicio(heading, formContent) {
        var html =  '<div id="dynamicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirm-modal" aria-hidden="true">';
        html += '<div class="modal-dialog">';
        html += '<div class="modal-content">';
        html += '<div class="modal-header">';
        //html += '<a class="close" data-dismiss="modal">×</a>';
        html += '<h4>'+heading+'</h4>'

        html += '<img src="http://localhost/icombh5/user_guide/img/teste.jpg" />';
        html += '</div>';
        html += '<div class="modal-body">';
        html += formContent;
        html += '<div class="modal-header">';
        html += '</div>';
        html += '<div class="modal-footer">';
        //html += '<span class="btn btn-primary" data-dismiss="modal">Fechar</span>';
        html += '</div>';  // content
        html += '</div>';  // dialog
        html += '</div>';  // footer
        html += '</div>';  // modalWindow
        $('body').append(html);
        $("#dynamicModal").modal({
            backdrop: 'static',
            keyboard: false
        });
        $("#dynamicModal").modal('show');
        $('#dynamicModal').on('hidden.bs.modal', function (e) {
            $(this).remove();
        });

    }
</script>
<!-- //JS para validar condição -->

<!--SCRIPT para apresentar campos de condição conforme número de propriedades-->

