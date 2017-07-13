<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="../../../icombh5">iCombH5</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#ModalTutorial">Tutorial</a>
                    
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#ModalFormulas">Fórmulas</a>
                </li>
            </ul>
    </div>
</nav>
<div id="ModalTutorial" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Tutorial</h3>
            </div>
            <div class="modal-body">
                <h4>Como resolver um exercício?</h4>
                <div class="container-fluid">
                    <div class="row">
                        <div class="content-section-a">  
                            <div class="title-tutorial-item"><b>Exercício</b></div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/lapis.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    Primeiro, analise o exercício. Atente-se ao seu Universo (conjunto de elementos), e que ele está pedindo para ser encontrado.
                                    Você conseguirá assim pensar quais são as restrições que precisam ser consideradas para chegar ao resultado do exercício.
                                    Se for necessário, clique em "Ver Universo" para ver todo o conjunto de elementos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-b"> 
                            <div class="title-tutorial-item"><b>Dica</b></div>
                            <div class="col-sm-10 ">
                                <p>
                                    Receba uma pista para resolver o exercício clicando no botão "Dica".
                                </p>
                            </div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/lampada.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-a"> 
                            <div class="title-tutorial-item"><b>Estágios</b></div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/estagios.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    O iCombH5 aplica a metodologia "dividir para conquistar" para a resolução de exercícios.
                                    Isso significa que você terá que identificar cada restrição do exercício, e construir um estágio para resolvê-lo.
                                    No final, você irá ter uma lista de estágios construídos e deverá uni-los para chegar a uma solução final (resposta).
                                    Mas atenção! Poderá haver exercícios que, com apenas um estágio, chegue-se a solução final.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-b"> 
                            <div class="title-tutorial-item"><b>Como criar estágios?</b></div>
                            <div class="col-sm-10">
                                <p>
                                    Clicando em "Novo Estágio". Uma vez clicado, um "formulário" se abrirá, e através dele dele você encontrará
                                    os elementos que atendem as restrições do exercício. Após preencher o formulário, você precisará validá-lo,
                                    para certificar-se que o montou corretamente.
                                    Estando validado, você o verá na "Lista de Estágios", e poderá excluí-lo caso deseje.
                                    Você conseguirá também visualizar os subconjuntos do Universo, que atendem as restrições de cada estágio.
                                </p>
                            </div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img src="<?= base_url()?>user_guide/img/tutorial/interrogacao.png" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-a"> 
                            <div class="title-tutorial-item"><b>Terminar o exercício</b></div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="tutorial-item-image">
                                    <img src="<?= base_url()?>user_guide/img/tutorial/exclamacao.png" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    Tendo construído todos os estágios, você precisa  indicar a maneira como os estágios se relacionam: multiplicando ou somando.
                                    Feito isso, você deverá clicar em "Terminar" para submeter sua resposta para a correção. Na seguinte tela,
                                    você verá a resposta do exercício, o registros da sua construção de estágio e o tempo que você levou para realizar a tarefa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalFormulas" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Fórmulas</h3>
            </div>
            <div class="modal-body">
                <?php foreach ($formula as $row): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url($row['imagem']) ?>" alt="">
                        </div>
                        <div class="col-md-1" id="text-formula">
                            <p><?= $row['expressao'] ?></p>
                        </div>
                        <div class="col-md-2" id="text-formula">
                            <p><?= $row['nome'] ?></p>
                        </div>
                        <div class="col-md-5">
                            <p><?= $row['explicacao'] ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>