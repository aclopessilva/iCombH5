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
        <h2 class="display-3">Exercício <?php echo $exercicio['exer_id']?></h2>
        <br />
        <div class="row">
            <div class="jumbotron col-xs-8">
                <h3 class=""><?php echo $exercicio['exer_desc']?></h3>
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
<div class="col-md-2"></div>
    <div class="modal-admin col-lg-8">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tutorial</h4>
        </div>
        <div class="modal-body">
          <!-- About Section -->
                  <section id="about">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-8 text-center">
                                  <h2 class="section-heading">About</h2>
                                  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-8">
                                  <ul class="timeline">
                                      <li>
                                          <div class="timeline-image">
                                              <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                                          </div>
                                          <div class="timeline-panel">
                                              <div class="timeline-heading">
                                                  <h4>2009-2011</h4>
                                                  <h4 class="subheading">Our Humble Beginnings</h4>
                                              </div>
                                              <div class="timeline-body">
                                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="timeline-inverted">
                                          <div class="timeline-image">
                                              <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                                          </div>
                                          <div class="timeline-panel">
                                              <div class="timeline-heading">
                                                  <h4>March 2011</h4>
                                                  <h4 class="subheading">An Agency is Born</h4>
                                              </div>
                                              <div class="timeline-body">
                                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="timeline-image">
                                              <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                                          </div>
                                          <div class="timeline-panel">
                                              <div class="timeline-heading">
                                                  <h4>December 2012</h4>
                                                  <h4 class="subheading">Transition to Full Service</h4>
                                              </div>
                                              <div class="timeline-body">
                                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="timeline-inverted">
                                          <div class="timeline-image">
                                              <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                                          </div>
                                          <div class="timeline-panel">
                                              <div class="timeline-heading">
                                                  <h4>July 2014</h4>
                                                  <h4 class="subheading">Phase Two Expansion</h4>
                                              </div>
                                              <div class="timeline-body">
                                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="timeline-inverted">
                                          <div class="timeline-image">
                                              <h4>Be Part
                                                  <br>Of Our
                                                  <br>Story!</h4>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </section>
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
          <h4 class="modal-title">Dica</h4>
        </div>
        <div class="modal-body">
          <p><?php echo $exercicio['exer_dica']?></p>
        </div>       
      </div>
      
    </div>
</div>