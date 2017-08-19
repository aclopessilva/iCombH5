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
				<img src="<?= base_url() . 'user_guide/img/indicador/img2.png' ?>" alt="">
			</div>
			<div class="col-xs-6">
				Tempo esperado: 05 minutos <br>
				Tempo levado pelo aluno: 10 minutos <br> 
				<img src="<?= base_url() . 'user_guide/img/indicador/img3.png' ?>" alt="">
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-xs-2" style="float: right;" >
            <a href="<?php echo site_url("exercicios") ?>"><button type="button" class="btn btn-info btnExercicio">Fazer outro exercício</button></a>
        </div>
    </div>
</section>