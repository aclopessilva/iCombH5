<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Exercícios</h2>
                <h3 class="section-subheading text-muted">Selecione um exercício para resolução:</h3>
            </div>
        </div>
        <div class="row text-center">
        <?php if ($exercicio1 == FALSE && $exercicio2 == FALSE && $exercicio3 == FALSE && $exercicio4 == FALSE): ?>
                    <h2>Nenhum exercicio encontrado</h2>
        <?php else: ?>
            <?php if($exercicio1 != false) : ?>
                <div class="row" style="padding-top: 10px;">
                    <div class="panel-heading" style="background-color:#222222; padding-top:5px;">
                        <h4 class="panel-title textExer" id="click_advance1"><i class="fa fa-sort-up textPgExercicio"></i>&nbsp;&nbsp;&nbsp;Universo de Cartas</h4>
                    </div>
                    <div class="row" id="display_advance"1>
                        <?php foreach ($exercicio1 as $row): ?>  
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                                <a href="<?php echo site_url('exercicio/resolucao/'.$row->id)?>" id="title-exercicio"><h4 class="service-heading">Exercício <?= $row->id ?></h4></a>
                                <p class="text-muted"><?= $row->descricao ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($exercicio2 != false) : ?>
                <div class="row" style="padding-top: 10px;">
                    <div class="panel-heading" style="background-color:#222222; padding-top:5px;">
                        <h4 class="panel-title textExer" id="click_advance2"><i class="fa fa-sort-up textPgExercicio"></i>&nbsp;&nbsp;&nbsp;Universo de Cartas</h4>
                    </div>
                    <div class="row" id="display_advance2">
                        <?php foreach ($exercicio2 as $row): ?>  
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                                <a href="<?php echo site_url('exercicio/resolucao/'.$row->id)?>" id="title-exercicio"><h4 class="service-heading">Exercício <?= $row->id ?></h4></a>
                                <p class="text-muted"><?= $row->descricao ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($exercicio3 != false) : ?>
                <div class="row" style="padding-top: 10px;">
                    <div class="panel-heading" style="background-color:#222222; padding-top:5px;">
                        <h4 class="panel-title textExer" id="click_advance3"><i class="fa fa-sort-up textPgExercicio"></i>&nbsp;&nbsp;&nbsp;Universo de Bolas</h4>
                    </div>
                    <div class="row" id="display_advance3">
                        <?php foreach ($exercicio3 as $row): ?>  
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                                <a href="<?php echo site_url('exercicio/resolucao/'.$row->id)?>" id="title-exercicio"><h4 class="service-heading">Exercício <?= $row->id ?></h4></a>
                                <p class="text-muted"><?= $row->descricao ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if($exercicio4 != false) : ?>
                <div class="row" style="padding-top: 10px;">
                    <div class="panel-heading" style="background-color:#222222; padding-top:5px;" >
                        <h4 class="panel-title textExer" id="click_advance4"><i class="fa fa-sort-up textPgExercicio"></i>&nbsp;&nbsp;&nbsp;Universo de Camisas de futebol</h4>
                    </div>
                    <div class="row" id="display_advance4">
                        <?php foreach ($exercicio4 as $row): ?>  
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                                <a href="<?php echo site_url('exercicio/resolucao/'.$row->id)?>" id="title-exercicio"><h4 class="service-heading">Exercício <?= $row->id ?></h4></a>
                                <p class="text-muted"><?= $row->descricao ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
         </div>
        <?php endif; ?>
    </div>
</section>

<?php $this->load->view('/exercicio/modais/tutorial.php'); ?>
<?php $this->load->view('/exercicio/modais/formula.php'); ?>

<script type="text/javascript">
    $('#click_advance1').click(function() {
                $('#display_advance2').toggle('1000');
                $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
            });

    $('#click_advance2').click(function() {
                $('#display_advance2').toggle('1000');
                $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
            });

    $('#click_advance3').click(function() {
                $('#display_advance3').toggle('1000');
                $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
            });

    $('#click_advance4').click(function() {
                $('#display_advance4').toggle('1000');
                $("i", this).toggleClass("fa fa-sort-desc fa fa-sort-up ");
            });
</script>
