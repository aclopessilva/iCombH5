<section id="exercicio">
	<div class="container">
		<div class="row titleIndicador">
			<h3>Parabéns! Sua resposta está correta!</h3>	
		</div>
		<div class="row d1">
			Veja abaixo seu desempenho:
		</div>
		<div style="padding-left: 50px;">
			<div class="row d2">
				1 elemento tal que o valor é  Ás
			</div>
			<div class="row d2">
				Número de possibilidade: C(4,1) = 4
			</div>
		</div>
		<br>
		<div class="row d1 text-center">
			Resultado:
		</div>
		<br>
		<div class="row">
			<div class="col-xs-6">
				Acertos: 01 <br>
				Erros: 02 <br> <br>
				<div id="donutchart" style="width: 700px; height: 350px;"></div>
			</div>
			<div class="col-xs-6">
				Tempo esperado: 05 minutos <br>
				Tempo levado pelo aluno: 10 minutos <br> 
				<div class="row" style="padding-top: 100px;">
					<div id="barchart_material" style="width: 700px; height: 140px;"></div>
				</div>			  
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-xs-2" style="float: right;" >
            <a href="<?php echo site_url("exercicios") ?>"><button type="button" class="btn btn-info btnExercicio">Fazer outro exercício</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2" style="float: right;" >
            <a href="<?php echo site_url("exercicios") ?>"><button type="button" class="btn btn-info btnExercicio">Fazer download</button></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2" style="float: right;" >
            <a href="<?php echo site_url("exercicios") ?>"><button type="button" class="btn btn-info btnExercicio">Fazer outro exercício</button></a>
        </div>
    </div>
</section>
 <!--Gráfico Bar Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      	$tEsperado = 5;
      	$tLevado = 10;
        var data = google.visualization.arrayToDataTable([
          ['Tempo', 'Esperado', 'Levado'],
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
      	$acertos=1;
      	$erros=2;
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
    </script>