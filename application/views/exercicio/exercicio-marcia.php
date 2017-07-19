<section id="exercicio">
    <div class="container" >
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">EXERCÍCIO <?php echo $exercicio['id'] ?></h3>
                </div>
                <div class="panel-body">
                    <div class="well col-xs-10">
                        <h3 class=""><?php echo $exercicio['descricao'] ?></h3>
                    </div>            

                    <div class="col-xs-2" >
                        <button type="button" class="btn btn-info buttonExercicio" data-toggle="modal" data-target="#ModalDica">Dica</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Universo</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-10">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2s.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3s.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4s.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5s.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6s.gif' ?>" alt="">
                    </div>

                    <div class="col-xs-2" >
                        <button type="button" class="btn btn-info " data-toggle="modal" data-target="#ModalUniverso">Universo</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Construção da solução</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <div class="col-xs-10">
                            <form class="form-horizontal" method="post" action="" id="form-condicao-ajax" >
                                <label class="col-sm-12 well" >Passo 1: Definir restrição</label>

                                <div class="form-group">
                                    <label class="col-sm-2" for="num_elementos">Eu quero:</label>

                                    <div class="col-sm-1">
                                        <input type="text" class="form-control" name="num_elementos" id="num_elementos" />
                                    </div>

                                    <label class="col-sm-4" for="num_propriedades">elemento(s) que verifique(m):</label>


                                    <div class="col-sm-5">
                                        <select class="form-control" name="num_propriedades" id="num_propriedades">
                                            <option value = 1>Uma propriedade</option>
                                            <option value = 2>Duas propriedade</option>
                                            <option value = 0>Nenhuma propriedade</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos:</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" name="atributo" id="atributo">
                                            <option value = '1'>Valor</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-4">
                                        <select class="form-control" name="pertence" id="pertence">
                                            <option value = '1'>é</option>
                                            <option value = '0'>não é</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-4">
                                        <select class="form-control" name="caracteristica" id="caracteristica">
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
                                    
                                    <div class="col-sm-12">
                                        <br>
                                       <input id="BtValidaEstagio" type="submit" name="enviarValida" value="Validar Estágio"  class="btn btn-default"/>
                                        <!-- <button type="submit" class="btn btn-default">Validar estágio</button> -->
                                    </div>
                                </div>

                                <hr>
                            </form>

                            <label class="col-sm-12 well" >Passo 2: Definir formula</label>
                            <form method="post" action="" id="ajax_form">
                                <label class="col-sm-2" for="formula">Formula:</label>

                                <div class="col-sm-2">
                                    <select class="form-control" id="formula" name="formula">
                                        <option value = '1'>C(n,p)</option>
                                        <option value = '2'>A(n,p)</option>
                                        <option value = '3'>p!</option>
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
                                    <input type="submit" name="enviar" value="Validar formula"  class="btn btn-default"/>
                                    <!-- <button type="submit" class="btn btn-default">Validar formula</button> -->
                                </div>
                            </form>


                            <form>    
                                <div class="form-group col-sm-12 ">
                            
                                <button type="button" class="btn btn-default bottom-right">Adicionar</button>
                            
                                </div>
                            </form>

                        </div>
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-default glyphicon glyphicon-plus"></button>
                            <button type="button" class="btn btn-default glyphicon glyphicon-refresh"></button>
                            
                        </div>

                    </div>
                </div>

            </div>
            
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de estagios</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <div class="col-xs-9">
                            
                            -01 elemeto tais que...
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
                                <a href="<?php echo site_url("indicador") ?>"><button type="button" class="btn btn-info buttonExercicio">Finalizar</button></a>
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

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#ajax_form').submit(function(){
            var dados = jQuery( this ).serialize();

            jQuery.ajax({
                type: "POST",
                url: "http://localhost:8080/icombh5/exercicio/teste",
                data: dados,
                success: function( data )
                {
                    alert( data );
                }
            });
            return false;
        });
    
        jQuery('#form-condicao-ajax').submit(function(){
            var dadosCondicao = jQuery( this ).serialize();

            if ($('#BtValidaEstagio').val() == 'Validando...') {
            return (false);
            }

            $('#BtValidaEstagio').val('Validando...');

            jQuery.ajax({
                type: "POST",
                url: "http://localhost/icombh5/exercicio/ValidaCondicao",
                dataType:'html',
                data: dadosCondicao,                
                success: function( data )
                {
                    alert( data );
                     $('#BtValidaEstagio').val('Validar Estágio');
                }
            });
            return false;
        });
    });
</script>

