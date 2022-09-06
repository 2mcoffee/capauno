<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container mb-4">
		<?php
			require_once('./model/studies-data.php');

			while($row = mysqli_fetch_array($user_results)) {
        ?>
        <div class="w-100 text-left mb-4">
            <a class="btn btn-outline-primary d-print-none" href="./learning.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="window.history.go(-1); return false;" data-tooltip="tooltip" data-placement="top" title="Volver"><i class="bi bi-arrow-left"></i></a>
            <?php
                if ($row["Ficha"] != NULL) {
                    echo '            <a class="btn btn-outline-dark d-print-none" href="./profile.php?ficha='.$row["Ficha"].'&referencia=4" data-tooltip="tooltip" data-placement="top" title="Ficha"><i class="bi bi-person"></i></a>'. "\n";
                }
            ?>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="print()" data-tooltip="tooltip" data-placement="top" title="Imprimir"><i class="bi bi-printer"></i></a>
        </div>
		<div class="row mb-4">
			<div class="col-12 col-sm-3">
				<div class="shadow-sm rounded border-0 p-2 h-120">
					<div class="text-center text-primary"><h1 class="mb-0"><i class="bi bi-people"></i></h1></div>
					<p class="card-text text-center small"><?php echo $row["Nombre"]. "\n"; ?></p>
				</div>
			</div>
			<div class="col-4 col-sm-3">
				<div class="shadow-sm rounded border-0 p-2 h-120">
					<div class="text-center text-primary"><h1 class="mb-0"><i class="bi bi-person-rolodex"></i></h1></div>
					<p class="card-text text-center small">Ficha: <?php echo $row["Ficha"]. "\n"; ?></p>
				</div>
			</div>
			<div class="col-4 col-sm-3">
				<div class="shadow-sm rounded border-0 p-2 h-120">
					<div class="text-center text-primary"><h1 class="mb-0"><i class="bi bi-calendar-event"></i></h1></div>
					<p class="card-text text-center small">
						<?php 
							if(is_null($row["Ingreso"])) {
								echo 'Ingreso:'. "\n";
							} else {
								echo 'Ingreso: '.date("d/m/y",strtotime($row["Ingreso"])). "\n"; 
							}
						?>
					</p>
				</div>
			</div>
			<div class="col-4 col-sm-3">
				<div class="shadow-sm rounded border-0 p-2 h-120">
					<div class="text-center text-primary"><h1 class="mb-0"><i class="bi bi-building"></i></h1></div>
					<p class="card-text text-center small"><?php echo 'Origen: '.$row["Origen"]. "\n"; ?></p>
				</div>
			</div>
		</div>
		<?php
            }
        ?>
		<div class="mb-4">
			<div class="border-left border-primary border-4 rounded shadow-sm mb-4 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-mortarboard-fill text-primary"></i></div> Educación Primaria</h5></div>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-hover table-borderless">
					<thead>
						<tr>
							<th scope="col">Nivel</th>
							<th scope="col">Turno</th>
							<th scope="col">Ciclo</th>
							<th scope="col">Inicio</th>
							<th scope="col">Fin</th>
							<th scope="col">Motivo</th>
							<th scope="col">Estado</th>
						</tr>
					</thead>
					<tbody>
				<?php
					while($row = mysqli_fetch_array($school_results)) {
						
						echo '					</tr>' . "\n";
						echo '						<td>' . $row["Nivel"]. '</td>' . "\n";
						echo '						<td>' . $row["Turno"]. '</td>' . "\n";
						echo '						<td>' . $row["Ciclo"]. '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime($row["Inicio"])). '</td>' . "\n";
						echo '						<td>' . $row["Fin"]. '</td>' . "\n";
						echo '						<td>' . $row["Motivo"]. '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-primary">Activo <i class="bi bi-check"></i></span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-primary">Baja <i class="bi bi-x"></i></span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="mb-4">
			<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-mortarboard-fill text-primary"></i></div> Educación Secundaria</h5></div>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-hover table-borderless">
					<thead>
						<tr>
							<th scope="col">Nivel</th>
							<th scope="col">Turno</th>
							<th scope="col">Curso</th>
							<th scope="col">Inicio</th>
							<th scope="col">Fin</th>
							<th scope="col">Motivo</th>
							<th scope="col">Estado</th>
						</tr>
					</thead>
					<tbody>
				<?php
					while($row = mysqli_fetch_array($highschool_results)) {
						
						echo '					</tr>' . "\n";
						echo '						<td>' . $row["Nivel"]. '</td>' . "\n";
						echo '						<td>' . $row["Turno"]. '</td>' . "\n";
						echo '						<td>' . $row["Grado"]. '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime($row["Inicio"])). '</td>' . "\n";
						echo '						<td>' . $row["Fin"]. '</td>' . "\n";
						echo '						<td>' . $row["Motivo"]. '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-primary">Activo <i class="bi bi-check"></i></span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-primary">Baja <i class="bi bi-x"></i></span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="mb-4">
			<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-mortarboard-fill text-primary"></i></div> Educación Terciaria</h5></div>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-hover table-borderless">
					<thead>
						<tr>
							<th scope="col">Nivel</th>
							<th scope="col">Carrera</th>
							<th scope="col">Año</th>
							<th scope="col">Inicio</th>
							<th scope="col">Fin</th>
							<th scope="col">Motivo</th>
							<th scope="col">Estado</th>
						</tr>
					</thead>
					<tbody>
				<?php
					while($row = mysqli_fetch_array($technical_results)) {
						
						echo '					</tr>' . "\n";
						echo '						<td>' . $row["Nivel"]. '</td>' . "\n";
						echo '						<td>' . $row["Carrera"]. '</td>' . "\n";
						echo '						<td>' . $row["Ciclo"]. '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime($row["Inicio"])). '</td>' . "\n";
						if(is_null($row["Fin"])) {
							echo '<td></td>'. "\n";
						} else {
							echo '						<td>'.date("d/m/Y",strtotime(utf8_encode($row["Fin"]))).'</td>'. "\n"; 
						}
						echo '						<td>' . $row["Motivo"]. '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-primary">Activo <i class="bi bi-check"></i></span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-primary">Baja <i class="bi bi-x"></i></span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="mb-4">
			<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-mortarboard-fill text-primary"></i></div> Educación Universitaria</h5></div>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-hover table-borderless">
					<thead>
						<tr>
							<th scope="col">Nivel</th>
							<th scope="col">Carrera</th>
							<th scope="col">Inicio</th>
							<th scope="col">Fin</th>
							<th scope="col">Motivo</th>
							<th scope="col">Estado</th>
						</tr>
					</thead>
					<tbody>
				<?php
					while($row = mysqli_fetch_array($university_results)) {
						
						echo '					</tr>' . "\n";
						echo '						<td>' . $row["Nivel"]. '</td>' . "\n";
						echo '						<td>' . $row["Carrera"]. '</td>' . "\n";
						if(is_null($row["Inicio"])) {
							echo '						<td>' . $row["Inicio"]. '</td>' . "\n";
						}
						else {
							echo '						<td>' . date("d/m/Y",strtotime($row["Inicio"])). '</td>' . "\n";
						}
						echo '						<td>' . $row["Fin"]. '</td>' . "\n";
						echo '						<td>' . $row["Motivo"]. '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-primary">Activo <i class="bi bi-check"></i></span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-primary">Baja <i class="bi bi-x"></i></span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
    </div>
    <!--Funcion Tooltip-->
	<script src="./bootstrap4/js/bootstrap-tooltip.min.js"></script>
<?php
require_once('./include/settings.php');
require_once('./config/close-db.php');
require_once('./include/copyright.php');
require_once('./include/footer.php');
?>