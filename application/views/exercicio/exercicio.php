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
            <div class="panel panel-default">
                <div class="panel-heading"  style="background-color:#222222">
                    <h3 class="panel-title textExer">Construção da solução</h3>
                </div>
                <div class="panel-body">

                    <div class="col-xs-12 text-center" >
                        <button id="btn-adicionar-estagio" type="button" class="btn btnExercicio">Iniciar 1° Estágio</button>
                    </div>

                    <div class="estagio collapse">
                        <div class="col-sm-12">
                            <label class="col-sm-12 textDourado desc-estagio" >Estágio 1</label>
                            <div class="col-xs-12" >
                                <div class="estagio-passo-1">
                                    <form class="form-horizontal form-condicao-ajax" method="post" action="" >
                                        <label class="col-sm-12 textPreto" >Passo 1: Definir restrição</label>
                                        <div class="col-sm-12  form-group">
                                            <label class="col-sm-2" for="num_elementos">Eu quero:</label>

                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="num_elementos" id="num_elementos" />
                                            </div>

                                            <label class="col-sm-4" for="num_propriedades">elemento(s) que verifique(m):</label>


                                            <div class="col-sm-5">
                                                <select class="form-control" name="num_propriedades" id="num_propriedades">
                                                    <option value = 0>Nenhuma propriedade</option>
                                                    <option value = 1 selected>Uma propriedade</option>
                                                    <option value = 2>Duas propriedade</option>
                                                </select>
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-12  form-group" id="divCondicao">

                                            <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos:</label>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="atributo" id="atributo">
                                                    <option value='value' >Valor</option>
                                                </select>
                                            </div>


                                            <div class="col-sm-4">
                                                <select class="form-control" name="pertence" id="pertence">
                                                    <option value='true' >é</option>
                                                    <option value='false' >não é</option>
                                                </select>
                                            </div>


                                            <div class="col-sm-4">
                                                <select class="form-control" name="caracteristica" id="caracteristica">
                                                    <option value = 'as'>Às</option>
                                                    <option value = '7'>7</option>
                                                    <option value = '8'>8</option>
                                                    <option value = '9'>9</option>
                                                    <option value = '10'>10</option>
                                                    <option value = 'valete'>Valete</option>
                                                    <option value = 'dama'>Dama</option>
                                                    <option value = 'rei'>Rei</option>
                                                </select>
                                            </div>

                                            <!-- <div class="col-sm-12">
                                                <br>
                                                <input id="btn-valida-restricao" type="submit" name="enviarValida" value="Validar Restrição"  class="btn btn-default"/>

                                            </div> -->
                                        </div>
                                        <!--/form> 
                                       <form class="form-horizontal form-condicao2-ajax" method="post" action=""-->
                                        <div class="form-group" id="divCondicao2" style="display:none;">

                                            <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos da segunda condição:</label>

                                            <div class="col-sm-4">
                                                <select class="form-control" name="atributo2" id="atributo2">
                                                    <option value = '1'>Valor</option>
                                                </select>
                                            </div>


                                            <div class="col-sm-4">
                                                <select class="form-control" name="pertence2" id="pertence2">
                                                    <option value = '1'>é</option>
                                                    <option value = '0'>não é</option>
                                                </select>
                                            </div>


                                            <div class="col-sm-4">
                                                <select class="form-control" name="caracteristica2" id="caracteristica2">
                                                    <option value = '1'>Às</option>
                                                    <option value = '7'>7</option>
                                                    <option value = '8'>8</option>
                                                    <option value = '9'>9</option>
                                                    <option value = '10'>10</option>
                                                    <option value = '11'>Valete</option>
                                                    <option value = '12'>Dama</option>
                                                    <option value = '13'>Rei</option>
                                                </select>
                                            </div>

                                            <!-- <div class="col-sm-12">
                                                <br>
                                                <input id="btn-valida-restricao2" type="submit" name="enviarValida2" value="Validar Restrição"  class="btn btn-default"/>

                                            </div> -->
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


                                            <label class="col-sm-1" for="n">n:</label>

                                            <div class="col-sm-2">
                                                <select class="form-control" id="n" name="n">
                                                    <option value = '1'>1</option>
                                                    <option value = '2'>2</option>
                                                    <option value = '3'>3</option>
                                                    <option value = '4'>4</option>
                                                    <option value = '5'>5</option>
                                                </select>
                                            </div>


                                            <label class="col-sm-1" for="p">p:</label>

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


            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#222222">
                    <h3 class="panel-title textExer">Lista de estagios</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <div class="col-xs-9">
                            <!-- LISTA DE ESTAGOS COMPLETADOS--->
                            <div id="lista-estagios">
                                <!-- esta lista sera prenchida com elementos do tipo item-estagio (id=estagio-base) -->
                            </div>

                            <!-- ITEM ESTAGIO (nao visivel)--->
                            <div id="estagio-base" class="item-estagio collapse col-sm-12" >
                                <div class="descricao col-sm-7">
                                    <!-- conteudo gerado no javascript -->
                                </div>
                                <div class="acoes col-sm-5">
                                    <input type="button" class="estagio-btn-elementos" value="Ver Elementos" />
                                    <input type="button" class="estagio-btn-deletar" value="Deletar"  />
                                    <input type="button" class="estagio-btn-ver" value="Consultar" />
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-3">

                            <label class="col-sm-12" for="relacionamento">Relacione estágios:</label>

                            <div class="col-sm-12">

                                <label><input type="radio" id="relacionamento" name="relacionamento" value="S">Soma</label>

                                <label><input type="radio" id="relacionamento" name="relacionamento" value="M">Multiplicacao</label>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-xs-2" style="float: right;" >
                                <a href="<?php echo site_url("indicador") ?>"><button type="button" class="btn btnExercicio">Finalizar</button></a>
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
     * representa o div do estagio atual
     */
    var div_estagio_atual;

    /**
     * lista de objetos html que sao os divs que sao os estagios desenvolvidos.
     */
    var div_estagios = new Array();

    /**
     * numero de estagio atual
     * @type {number}
     */
    var numero_estagio_atual = 0;

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




    jQuery(document).ready(function () {

        /**
         * Inicia estagio
         */
        $("#btn-adicionar-estagio").click(function () {

            if(div_estagio_atual== null){
                div_estagio_atual = $(".estagio:last");
                div_estagio_atual.estado = 'NOVO';
                div_estagio_atual.show();
                //adicionamos o div a lista de estagios
                div_estagios.push(div_estagio_atual);

                //        div_estagio_atual.clone().insertAfter(".estagio:last");
                //       div_estagio_atual = $(".estagio:last");
                //        div_estagio_atual.find(".desc-estagio").text("Estagio " + (i + 1));
                $("#btn-adicionar-estagio").text('Iniciar '+(div_estagios.length)+'° Estágio')
                numero_estagio_atual = div_estagios.length;
            }
        });

        /**
         * Evento click no botao de clase estagio-btn-elementos, mostramos o modal mostrando todos os elemetnos do  universo
         * e resaltando os elemtnsos que cumprem a condicao selecionada no estagio
         */
        jQuery(document).find('.estagio-btn-elementos').click(function () {


            /*
            //recuperamos o estagio-numero que corresponde ao botao selecionado
            var estagio_numero = $(this).parent().parent().attr("estagio-numero");

            //recuperamos os estagio que contem, entre outras coisas, a lista elementos que cumprem com a restricao
            var estagio = encontraEstagioPorNumero(estagio_numero);
            $().each(elementos_do_universo, function(universo_key, universo_value){
                $().each(estagio.elementos_selecionados, function(estagio_key, estagio_value){
                    if(universo_value.id == estagio_value.id){
                        console.log("bate com a condicao o elemento: "+ universo_value.id);
                    }else{
                        console.log("nao bate com a restricao: "+ universo_value.id);
                    }
                });
            });
            */

            /*
            var modal_sub_universo = $('#ModalSubUniverso');
            //substituimos o id do div por um novo chamado estagio-1 para o primeiro e assim por diante.
            modal_sub_universo.prop('id','estagio-sub-universo-'+ numero);

            var modal_sub_universo_body = modal_sub_universo.find('.modal-body');

            $.each( elementos, function( key, elemento ){
                modal_sub_universo_body.append('<img src="'+'http://localhost/icombh5/'+elemento.imagem+'" />');
            });


            $('body').append(modal_sub_universo);
            //mostrando o modal subuniverso
            modal_sub_universo.toggle();
            */

        });

        /**
         * valida restricao
         */
        jQuery(document).find('.form-condicao-ajax').submit(function () {
            var dadosCondicao = jQuery(this).serialize();

            if ($('#btn-valida-restricao').val() == 'Validando...') {
                return (false);
            }

            $('#btn-valida-restricao').val('Validando...');

            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/ValidaCondicao",
                dataType: 'html',
                data: dadosCondicao,
                success: function (data)
                {
                    var data = JSON.parse(data);
                    var estado = data.estado;

                    if(estado == 'OK'){
                        div_estagio_atual.find(".estagio-passo-2").show();
                        $('#btn-valida-restricao').val('Restrição Validada');
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

            div_estagio_atual.find('#validar-estagio').val('Validando...');

            var dadosCondicao = jQuery(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: "<?= base_url()?>/exercicio/ValidaEstagio",
                dataType: 'html',
                data: dadosCondicao,
                success: function (data)
                {
                    var data = JSON.parse(data);
                    if(data.estado == 'OK'){
                        //adicionamos o estagio retornado a lista de estagios finalizados
                        adicionaEstagio(data.estagio);
                    }else{
                        alert( data.mensagem);
                    }


                }
            });

            return false;

        });


        /**
         ***************************** FUNCOES AUXLIARES ***************************
         */


        var encontraEstagioPorNumero = function(estagio_numero) {
            for (var i = 0, len = lista_estagios.length; i < len; i++) {
                if (lista_estagios[i].numero === estagio_numero)
                    return lista_estagios[i]; // Return as soon as the object is found
            }
            return null; // The object was not found
        }

        var consultaGabarito = function(elemento_id, estagio) {
            var resultado = false;
            $.each(estagio.elementos_selecionados, function(estagio_key, estagio_value){
                if(elemento_id == estagio_value.id){
                    resultado  = true;
                }
            });
            return resultado;
        }


        /**
         * Adiciona interacao quando a formula selecionada mostra ou nao "n" ou "p" e tambem modifica o valor final da formula
         */
        jQuery(document).find('#formula').change(function () {
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
         * Muda o valor final da formula
         */
        function trocarValorFormula(){
            var n = div_estagio_atual.find(".form-validar-estagio-ajax").find("#n").val();
            var p = div_estagio_atual.find(".form-validar-estagio-ajax").find("#p").val();
            var formula = div_estagio_atual.find(".form-validar-estagio-ajax").find("#formula").val();
            formula = formula.replace("n", n);
            formula = formula.replace("p", p);
            div_estagio_atual.find(".form-validar-estagio-ajax").find("#formula-definida").text(formula);
        }



        function mostraSubUniverso(elementos, numero){
            $().each(elementos_do_universo, function(key, value){

            });
            /*
            var modal_sub_universo = $('#ModalSubUniverso');
            //substituimos o id do div por um novo chamado estagio-1 para o primeiro e assim por diante.
            modal_sub_universo.prop('id','estagio-sub-universo-'+ numero);

            var modal_sub_universo_body = modal_sub_universo.find('.modal-body');

            $.each( elementos, function( key, elemento ){
                modal_sub_universo_body.append('<img src="'+'http://localhost/icombh5/'+elemento.imagem+'" />');
            });


            $('body').append(modal_sub_universo);
            //mostrando o modal subuniverso
            modal_sub_universo.toggle();
            */
        }

        function adicionaEstagio(estagio){
            if(estagio.estado=='FINALIZADO'){
                lista_estagios.push(estagio);
                var estagio_div = $('#estagio-base').clone();

                //substituimos o id do div por um novo chamado estagio-1 para o primeiro e assim por diante.
                estagio_div.prop('id','estagio-'+estagio.numero);
                //adicionamos um atributo html para identificar o estagio facilmente
                estagio_div.attr('estagio-numero',estagio.numero);

                estagio_div.find(".estagio-btn-elementos").first().click(function(){
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

                    doModal('sub-universo',conteudo_do_modal);


                });
                var estagio_base_desc = estagio_div.find('.descricao');


                estagio_base_desc.append('<p>'+ estagio.condicao.quantidade + ' elemento(s) que cumpram as seguintes condicoes:</p>');

                if(estagio.condicao.expressoes!=undefined){

                    if(estagio.condicao.expressoes.length>0){
                        estagio_base_desc.append('<ol>');
                        $.each( estagio.condicao.expressoes, function( key, expresao ){
                            estagio_base_desc.append('<li>'+expresao.atributo+' '+ expresao.pertence +' '+ $.each(expresao.elementos, function (elemento) {" "+elemento})+'</li>');
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
        }

    });

    function doModal(heading, formContent) {
        html =  '<div id="dynamicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirm-modal" aria-hidden="true">';
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
     * adicionamos os elementos para a lista delementos de universo
     */
    <?php foreach ($elementosUniverso as $row): ?>
        elementos_do_universo.push(
                {
                    "id": "<?=$row->id?>",
                    "imagem" : "<?=$row->imagem?>"
                }
        );
    <?php endforeach; ?>

</script>
<!-- //JS para validar condição -->

<!--SCRIPT para apresentar campos de condição conforme número de propriedades-->

<script type="text/javascript">
    window.onload = function(){
       id('num_propriedades').onchange = function(){

           if( this.value==0)
             id('divCondicao').style.display = 'none';                
           else
             id('divCondicao').style.display = 'block';  

           if( this.value==2)
               id('divCondicao2').style.display = 'block';
           else
               id('divCondicao2').style.display = 'none';
       }
    }
    function id( el ){
       return document.getElementById( el );
    }

    $('#click_advance').click(function() {
        $('#display_advance').toggle('1000');
        $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
    });
</script>
