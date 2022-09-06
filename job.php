<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container mb-4">
		<?php
			require_once('./model/job-data.php');

			while($row = mysqli_fetch_array($user_results)) {
        ?>
        <div class="w-100 text-left mb-4">
            <a class="btn btn-outline-primary d-print-none" href="./work.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="window.history.go(-1); return false;" data-tooltip="tooltip" data-placement="top" title="Volver"><i class="bi bi-arrow-left"></i></a>
            <?php
                if ($row["Ficha"] != NULL) {
                    echo '            <a class="btn btn-outline-dark d-print-none" href="./profile.php?ficha='.$row["Ficha"].'&referencia=3" data-tooltip="tooltip" data-placement="top" title="Ficha"><i class="bi bi-person"></i></a>'. "\n";
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
		<div class="table-responsive-sm mb-4">
			<table class="table table-borderless table-hover">
				<thead class="border-left border-primary border-4 shadow-sm">
					<tr>
						<th scope="col">Tipo</th>
						<th scope="col">Fecha</th>
						<th scope="col">Empleo</th>
						<th scope="col">Solicito</th>
						<th scope="col">Dispuso</th>
						<th scope="col">Motivo</th>
					</tr>
				</thead>
				<tbody>
			<?php
				while($row = mysqli_fetch_array($job_results)) {
					echo '					<tr>' . "\n";
					if ($row["Alta"]==1) {
						
						echo '						<td>Alta <i class="bi bi-arrow-up-square-fill text-primary"></td>' . "\n";
						
					} else {
						
						echo '						<td>Baja <i class="bi bi-arrow-down-square text-primary"></td>' . "\n";
						
					}
					echo '						<td>' . date("d/m/Y",strtotime($row["Fecha"])). '</td>' . "\n";
					echo '						<td>' . $row["Empleo"]. '</td>' . "\n";
					echo '						<td>' . $row["Solicito"]. '</td>' . "\n";
					echo '						<td>' . $row["Dispuso"]. '</td>' . "\n";
					echo '						<td>' . $row["Motivo"]. '</td>' . "\n";
					echo '					</tr>' . "\n";
				}
			?>
				</tbody>
			</table>
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