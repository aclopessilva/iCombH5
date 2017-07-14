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
                            <form class="form-horizontal">

                                <label class="col-sm-12 well" >Passo 1: Definir restrição</label>

                                <div class="form-group">
                                    <label class="col-sm-2" for="num_elementos">Eu quero:</label>

                                    <div class="col-sm-1">
                                        <input type="text" class="form-control" id="num_elementos" />
                                    </div>

                                    <label class="col-sm-4" for="num_propriedades">elemento(s) que verifique(m):</label>


                                    <div class="col-sm-5">
                                        <select class="form-control" id="num_propriedades">
                                            <option value = 1>Uma propriedade</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <label class="col-sm-12" for="num_elementos">Escolha as configurações que definem os elementos:</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" id="atributo">
                                            <option value = 'valor'>Valor</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-4">
                                        <select class="form-control" id="pertence">
                                            <option value = 'e'>é</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-4">
                                        <select class="form-control" id="caracteristica">
                                            <option value = 'as'>Às</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <br>
                                        <button type="button" class="btn btn-default">Validar estagio</button>
                                    </div>
                                </div>

                                <hr>


                                <label class="col-sm-12 well" >Passo 2: Definir formula</label>

                                <div class="form-group">
                                    <label class="col-sm-2" for="formula">Formula:</label>

                                    <div class="col-sm-2">
                                        <select class="form-control" id="formula">
                                            <option value = '1'>C(n,p)</option>
                                        </select>
                                    </div>


                                    <label class="col-sm-1" for="n">n:</label>

                                    <div class="col-sm-2">
                                        <select class="form-control" id="n">
                                            <option value = '4'>4</option>
                                        </select>
                                    </div>


                                    <label class="col-sm-1" for="p">p:</label>

                                    <div class="col-sm-2">
                                        <select class="form-control" id="p">
                                            <option value = '1'>1</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-default">Validar formula</button>
                                    </div>
                                </div>


                                
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



