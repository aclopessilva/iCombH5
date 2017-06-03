<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Exercicios</h2>
                <h3 class="section-subheading text-muted">Selecione um exercicío para resolução:</h3>
            </div>
        </div>
        <div class="row text-center">
        <?php if ($exercicio == FALSE): ?>
                    <h2>Nenhum exercicio encontrado</h2>
        <?php else: ?>
            <?php foreach ($exercicio as $row): ?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="<?php echo site_url("resolver")?>"><h4 class="service-heading">Exercicio <?= $row['exer_id'] ?></h4></a>
                    <p class="text-muted"><?= $row['exer_desc'] ?></p>
                </div>
             <?php endforeach; ?>
         </div>
        <?php endif; ?>
    </div>
</section>
