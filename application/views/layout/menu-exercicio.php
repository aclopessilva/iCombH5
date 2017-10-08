<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="<?=base_url()?>">iCombH5</a>
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

<?php $this->load->view('/exercicio/modais/formula.php'); ?>
<?php $this->load->view('/exercicio/modais/tutorial.php'); ?>
