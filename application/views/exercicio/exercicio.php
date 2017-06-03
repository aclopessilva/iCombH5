<style type="text/css">
    
    .buttonExercicio{
        float: left;
    }

    .buttonNvExercicio{
        float: right;
    }
</style>

<section id="exercicio">
    <div class="container">
        <h2 class="display-3">Exercicio 01</h2>
        <br />
        <div class="row">
            <div class="jumbotron col-xs-8">
                <h3 class="">explicação do exercicio</h3>
            </div>
            <div class="col-xs-4" style="padding-top: 20px; padding-left: 80px;">
                <button type="button" class="btn btn-info buttonExercicio" data-toggle="modal" data-target="#ModalUniverso">Tutorial</button>
                <br><br><br><br>
                <button type="button" class="btn btn-info buttonExercicio" data-toggle="modal" data-target="#ModalDica">Dica</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8" style="padding: 10px;">
                <button type="button" class="btn btn-default buttonNvExercicio">Novo Estágio</button>
            </div>
        </div>
        <div class="row">
            <div class="jumbotron col-xs-8">
                <h3 class="">Reservado para resolução de estágio</h3>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="ModalUniverso" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDica" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>