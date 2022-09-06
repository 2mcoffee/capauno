<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container">
		<?php
			require_once('./model/welcome-data.php');

			while($row = mysqli_fetch_array($welcome_results)) {
			
		?>
		<div class="jumbotron jumbotron-fluid border-left border-primary border-4 rounded shadow-sm">
			<div class="container">
				<h1 class="display-4"><?php echo $row["Bienvenida"]."."; ?></h1>
				<p class="lead">Te damos la bienvenida. Con increíble facilidad, y desde un único punto, podrás administrar todas las tareas diarias y  planificar a futuro la gestión, ahorrando tiempo y esfuerzo.</p>
			</div>
		</div>
		<div class="container mb-4">
			<div class="row">
				<?php 
					if ( $row["Notificaciones"] > 0) {
						echo '<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4 h-150">
						<div class="text-center text-primary"><h1><i class="bi bi-envelope-paper"></i></h1></div>
						<p class="card-text text-center small"><span class="badge badge-primary">'.$row["Notificaciones"].'</span> nuevos mensajes</p>
					</div>
				</div>'."\n";
				} else {
					echo '<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4 h-150">
						<div class="text-center text-primary"><h1><i class="bi bi-envelope"></i></h1></div>
						<p class="card-text text-center small"><span class="badge badge-primary">'.$row["Notificaciones"].'</span> nuevos mensajes</p>
					</div>
				</div>'."\n";
				}
				?>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4 h-150">
						<div class="text-center text-primary"><h1><i class="bi bi-info-circle"></i></h1></div>
						<p class="card-text text-center small">Actualizado el <strong><?php echo date("d/m/Y",strtotime($row["Actualizacion"])); ?></strong></p>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4 h-150">
						<div class="text-center text-primary"><h1><i class="bi bi-person-circle"></i></h1></div>
						<p class="card-text text-center small"><span class="badge badge-primary"><?php echo $row["Internos"]; ?></span> internos</p>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4 h-150">
						<div class="text-center text-primary"><h1><i class="bi bi-easel2"></i></h1></div>
						<p class="card-text text-center small"><span class="badge badge-primary"><?php echo $row["Cursos"]; ?></span> cursos activos</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
	
			while($row = mysqli_fetch_array($stats_results)) {
			
		?>
		<div class="container mb-4">
			<div class="row">
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4">
						<div class="text-center text-primary"><h1 class="mb-0"><?php echo $row["Matriculas"]; ?></h1></div>
						<p class="card-text text-center small">Matriculas</p>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4">
						<div class="text-center text-primary"><h1 class="mb-0"><?php echo $row["Cursando"]; ?></h1></div>
						<p class="card-text text-center small">Cursando</p>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4">
						<div class="text-center text-primary"><h1 class="mb-0 d-inline"><?php echo $row["Finalizados"]; ?></h1><span class="icon-text-small text-success"> <i class="bi bi-arrow-up-circle"></i></span></div>
						<p class="card-text text-center small">Egresados</p>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="shadow-sm rounded border-0 p-4">
						<div class="text-center text-primary"><h1 class="mb-0 d-inline"><?php echo $row["Bajas"]; ?></h1><span class="icon-text-small text-danger"> <i class="bi bi-arrow-down-circle"></i></span></div>
						<p class="card-text text-center small">Bajas</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		?>
		<div class="row align-items-center">
			<div class="col-sm-6 text-center mb-4">
			<?php

				while($row = mysqli_fetch_array($chart_results)) {

					$course[]  = $row['Curso']  ;
            		$total[] = $row['Total'];
        		}

			?>
				<canvas  id="chartjs_bar" class="h-250"></canvas>
				<script>
					var ctx = document.getElementById("chartjs_bar").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'bar',
							data: {
									labels:<?php echo json_encode($course); ?>,
									datasets: [{
										backgroundColor: [
											"#0d6efd",
											"#3485fd",
											"#6ea8fe",
											"#a9cbfe"
										],
										data:<?php echo json_encode($total); ?>,
									}]
							},
							options: {
								responsive: true,
								scales: {
									x: {
										ticks: {
											display: false
										}
									}
								},
								plugins: {
									legend: {
										display: false
									},
									title: {
										display: true,
										text: 'Alumnos activos por curso'
									}
								}
							}
						});
				</script> 	
			</div>
			<div class="col-sm-6 text-center mb-4">				
			<?php

				while($row = mysqli_fetch_array($pie_results)) {

					$students[]  = $row['Titulo']  ;
					$value[] = $row['Valor'];
				}

			?>
				<canvas  id="chartjs_pie" class="h-250"></canvas>
				<script>
					var ctx = document.getElementById("chartjs_pie").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'pie',
							data: {
									labels:<?php echo json_encode($students); ?>,
									datasets: [{
									backgroundColor: [
										"#0d6efd",
										"#3485fd",
										"#6ea8fe"
									],
									data:<?php echo json_encode($value); ?>,
									}]
							},
							options: {
								responsive: true,
								plugins: {
									legend: {
										display: true,
										position: 'right',
									},
									title: {
										display: true,
										text: 'Distribución de matrículas'
									}
								}
							}
						});
				</script> 	
			</div>
		</div>
		<div class="card-deck mb-4">
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-people-fill text-primary"></i></div> Perfiles</h6>
					<div class="card-text font-weight-light mb-2">
						Información centralizada de todos los internos de la Unidad N°1.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./user.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-clipboard2-data-fill text-primary"></i></div> Capacitaciones</h6>
					<div class="card-text font-weight-light mb-2">
						Información regional de capacitaciones de internos.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./course.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-wrench-adjustable text-primary"></i></div> Empleos</h6>
					<div class="card-text font-weight-light mb-2">
						Historial de empleos de internos de la Unidad N°1.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./work.php">Comenzar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-deck mb-4">
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-mortarboard-fill text-primary"></i></div> Estudios</h6>
					<div class="card-text font-weight-light mb-2">
						Historial de cursadas en colegio primario, secundario y en universidad.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./learning.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-book-half"></i></div> Talleres</h6>
					<div class="card-text font-weight-light mb-2">
						Historial de talleres de capacitación del área de educación.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./workshop.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card shadow-sm border-0 rounded">
				<div class="card-body">
					<h6 class="card-title"><div class="icon-holder"><i class="bi bi-pc-display"></i></div> Inscripciones</h6>
					<div class="card-text font-weight-light mb-2">
						Revisión de inscripciones para cursos del ciclo lectivo vigente.
					</div>
					<div>
						<a class="btn btn-sm btn-outline-primary" href="./inscription.php">Comenzar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
require_once('./include/settings.php');
require_once('./config/close-db.php');
require_once('./include/copyright.php');
require_once('./include/footer.php');
?>