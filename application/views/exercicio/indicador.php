<section id="exercicio">

    <div class="container">
        <div class="row">
      <div class="col-xs-2" style="float: right;" >
             <button type="button" class="btn btn-info btnExercicio" data-toggle="modal" data-target="#ModalLogs">Logs</button>
            </div>
        </div>
        <div class="row titleIndicador">            
            <div class="col-xs-12">
                <h3>Parabéns! Sua resposta está correta!</h3>	
            </div>
        </div>
        <div class="row d1">
            <div class="col-xs-12">
                <p>Reveja o sumário da sua resolução:</p>
                <div class="container" >
                <!-- interando os estagios corretos -ana -->
                <?php 
                $contador = 0;
                foreach ($estagiosCorretos as $estagioCorreto){
                    $contador++;
                    $quantidade =  $estagioCorreto->condicao->quantidade;
                    $expressoes =  $estagioCorreto->condicao->expressoes;
                ?>
                        <div class="row d2">

                            <div class="col-xs-12">
                                <p><?=$contador?>° Estágio: </p>
                                <p><?=$quantidade?> elemento(s) cumpre(m) a(s) seguinte(s) condição(ões):</p>
                                <ul>
                                <?php foreach($expressoes as $expressao){?>
                                    <li><p><?=$expressao->texto?></p></li>
                                <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="row d2 item-estagio">
                            <div class="col-xs-12">
                            <?php 
                            $n = $estagioCorreto->formula->n;
                            $p = $estagioCorreto->formula->p;
                            $textoFormula = str_replace("n", $n ,$estagioCorreto->formula->formula->notacao);
                            $textoFormula = str_replace("p", $p ,$textoFormula );
                            ?>
                                <p>Fórmula utilizada <b><?=$estagioCorreto->formula->formula->nome?></b>: <?=$textoFormula?>. Resultado: <b><?=$estagioCorreto->formula->resultado?></b> possibilidade(s).</p>
                            </div>
                        </div>
                <?php }?>
                </div>
            </div>
        </div> 
        <div class="row ">


            <div class="col-xs-12 text-center">
                <p>O(s) estagio(s) se relaciona(m) por meio de <b><?=$relacionamentoFinal?></b></p>
                <p>Resultado final: <b><?=$resultadoFinal?></b> possibilidade(s) em total.</p>
            </div>
        </div>
             
        <div class="row">
                <div class="col-xs-6">
                        Acertos: <?php echo $quantidadeAcertos; ?> <br>
                        Erros: <?php echo $quantidadeErros; ?> <br> <br>
                        <div id="donutchart" style="width: 700px; height: 350px;"></div>
                </div>
                <div class="col-xs-6">
                        Tempo esperado: <?php echo $tempoEsperado ?><br>
                        Tempo levado pelo aluno: <?php echo $tempoDemorado ?><br>
                        <?php echo $diffPositivaouNegativa ?><br> 
                        <div class="row" style="padding-top: 100px;">
                                <div id="barchart_material" style="width: 600px; height: 140px;"></div>
                        </div>			  
                </div>
        </div>
	</div>
  <br>
  <div class="row" style="padding-right: 50px;" >
    <div class="" style="float: right;" >
      <a href="<?php echo site_url("exercicios") ?>"><button type="button" class="btn btn-info btnExercicio">Fazer outro exercício</button></a>
    </div>

    <div class="" style="float: right;" >
        <!-- <a href="<?php //echo site_url("pdf") ?>"><button type="button" class="btn btn-info btnExercicio">Baixar PDF</button></a> -->
      <form action="pdf" method="post">
        <input type="hidden" value="<?php echo $exercicio->id; ?>" name="idExercicio" />
        <input type="hidden" value="<?php echo $exercicio->descricao; ?>" name="descricaoExercicio" />

        <div class="col-sm-12">
          <input type="submit" value="Baixar pdf" class="btn btnExercicio"/>
        </div>                        
      </form> 
    </div>

    <div class="" style="float: right;" >     
      <button type="button" class="btn btn-info btnExercicio" data-toggle="modal" data-target="#ModalEmail">Enviar Email</button>
    </div>
  </div>
</section>

<!-- ModalLOG -->
<div class="modal fade" id="ModalLogs" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">LOG</h3>
            </div>
            <div class="modal-body">
                <?php foreach ($retorno as $row): ?>
                  <div class="row" style="padding-left: 5px;">
                     <p><?= $row->texto ?></p> 
                  </div>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--
*
* Modal formulário de envio de Email
* 
-->
<div class="modal" id="ModalEmail" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Enviar Relatório</h3>
            </div>
            <div class="modal-body" style="padding-bottom: 140px;">
                <form action="email" method="post">
                    <label class="col-sm-4" for="nomeUsuario">Seu nome:</label>

                      <div class="col-sm-8" style="padding-bottom: 10px;">
                        <input type="text" class="form-control" onkeypress="return txtBoxFormat(event);" name="nomeUsuario" id="nomeUsuario" />
                      </div>

                    <label class="col-sm-4" for="emailDestino">Email do destinatário:</label>

                      <div class="col-sm-8" style="padding-bottom: 15px;">
                        <input type="text" class="form-control" name="emailDestino" id="emailDestino" />
                      </div>

                      <input type="hidden" value="<?php echo $exercicio->id; ?>" name="idExercicio" />
                      <input type="hidden" value="<?php echo $exercicio->descricao; ?>" name="descricaoExercicio" />

                      <div class="col-sm-12">
                         <input type="submit" value="Enviar Relatório" class="btn btnExercicio"/>
                      </div>                        
                  </form> 

            </div>  
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--Gráfico Bar Chart-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
  	$tEsperado = <?php echo $tempoEsperadoS; ?>;
  	$tLevado = <?php echo $tempoDemoradoS; ?>;
    var data = google.visualization.arrayToDataTable([
      ['Tempo', 'Esperado em S', 'Levado em S'],
      ['Duração', $tEsperado, $tLevado]
      
    ]);

    var options = {
      chart: {
      },
      bars: 'horizontal', // Required for Material Bar Charts.
      colors: ['#668cff', '#cc0000']
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
<!--Gráfico Donut Chart-->
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
  	$acertos= <?php echo $quantidadeAcertos; ?>;
  	$erros= <?php echo $quantidadeErros; ?>;
    var data = google.visualization.arrayToDataTable([
      ['esperado', 'levado'],
      ['Acertos', $acertos],         
      ['Erros', $erros],
      
    ]);

    var options = {
      title: 'Resolução',
      pieHole: 0.4,
      colors: ['#29a329', '#cc0000']
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }

  /*
  *
  *Js para campo aceitar apenas letras
  * 
   */  
   function txtBoxFormat(evtKeyPress) {
        var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;

        if(document.all) { // Internet Explorer
            nTecla = evtKeyPress.keyCode;
        } else if(document.layers) { // Nestcape
            nTecla = evtKeyPress.which;
        } else {
            nTecla = evtKeyPress.which;
            if (nTecla == 8) {
                return true;
            }
        }
        if (nTecla != 8)
          return ((nTecla <= 47) || (nTecla >= 58)); 
        else 
          return true;
    }
</script>

