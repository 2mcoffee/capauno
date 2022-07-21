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
        <div class="alert alert-primary mb-4" role="alert">
            <i class="bi bi-info-circle"></i> <strong>Información:</strong> Los datos visualizados pertenecen al interno <?php echo utf8_encode($row["Nombre"]). "\n"; ?>
        </div>
		<?php
            }
        ?>
		<br>
		<div class="mb-4">
			<h4>Educación Primaria:</h4>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-sm table-hover">
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
						echo '						<td>' . utf8_encode($row["Nivel"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Turno"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Ciclo"]). '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Inicio"]))). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Fin"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Motivo"]). '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-pill badge-success">Activo</span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-pill badge-danger">Baja</span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="mb-4">
			<h4>Educación Secundaria:</h4>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-sm table-hover">
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
						echo '						<td>' . utf8_encode($row["Nivel"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Turno"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Grado"]). '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Inicio"]))). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Fin"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Motivo"]). '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-pill badge-success">Activo</span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-pill badge-danger">Baja</span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="mb-4">
			<h4>Educación Terciaria:</h4>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-sm table-hover">
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
						echo '						<td>' . utf8_encode($row["Nivel"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Carrera"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Ciclo"]). '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Inicio"]))). '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Fin"]))). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Motivo"]). '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-pill badge-success">Activo</span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-pill badge-danger">Baja</span></td>' . "\n";
							
						}
						echo '					</tr>' . "\n";
						
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="mb-4">
			<h4>Educación Universitaria:</h4>		
			<div class="table-responsive-sm mb-4">
				<table class="table table-sm table-hover">
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
						echo '						<td>' . utf8_encode($row["Nivel"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Carrera"]). '</td>' . "\n";
						echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Inicio"]))). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Fin"]). '</td>' . "\n";
						echo '						<td>' . utf8_encode($row["Motivo"]). '</td>' . "\n";
						if ($row["Activo"] == 1) {
						
							echo '						<td><span class="badge badge-pill badge-success">Activo</span></td>' . "\n";
							
						} else {
							
							echo '						<td><span class="badge badge-pill badge-danger">Baja</span></td>' . "\n";
							
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