
	<div class="main_body">
		<div class="main_top">
			<h1>Detalhes do grupo</h1>
		</div>
		<img src='<?= base_url("bootstrap/img/gp.png")?>' class="img_gp">'
		<section class="informacao-perfil">
		<?php 
			foreach ($grupos as $grupo) {
				echo "<div class='infos'>$grupo->lugar</div>"; 
				echo "<div class='infos'>$grupo->regente</div>";
				echo "<div class='infos'>$grupo->dia_grupo</div>";
				echo "<div class='infos'>$grupo->materia_grupo</div>"; 
			}
	?>
	<?php 
	
	if($testes == NULL){
		echo "Clique no ícone para participar:";
		echo "<a href='".site_url("grupo/entrar/$grupo->cod_grupo")."'>
				<img width='20' height='20' 
				src='".base_url('bootstrap/open-iconic/svg/task.svg')."'>
				</a>";
				}else{
				
				echo "Clique no ícone cancelar sua participação:";
				echo "<a href='".site_url("grupo/sair/$grupo->cod_grupo")."'>
				<img width='20' height='20'
				src='".base_url('bootstrap/open-iconic/svg/arrow-circle-left.svg')."'>
				</a>";
				}
				
		?>
		</section>
		</div>