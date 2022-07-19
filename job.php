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
        <div class="alert alert-primary mb-4" role="alert">
            <i class="bi bi-info-circle"></i> <strong>Información:</strong> Los datos visualizados pertenecen al interno <?php echo utf8_encode($row["Nombre"]). "\n"; ?>
        </div>
        <div class="row mx-auto mb-4 border rounded">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Interno</strong></small></span>
				<br>
				<?php echo utf8_encode($row["Nombre"]). "\n"; ?>
		    </div>
            <div class="col-sm-3 mb-1">
				<span><small><strong>Ficha</strong></small></span>
				<br>
                <?php echo utf8_encode($row["Ficha"]). "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Fecha Ingreso</strong></small></span>
				<br>
				<?php 
					if(is_null($row["Ingreso"])) {
						echo ''. "\n";
					} else {
						echo date("d/m/Y",strtotime(utf8_encode($row["Ingreso"]))). "\n"; 
					}
				?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Origen</strong></small></span>
				<br>
				<?php echo utf8_encode($row["Origen"]). "\n"; ?>
			</div>
		</div>
		<?php
            }
		?>
		<div class="table-responsive-sm mb-4">
			<table class="table table-sm table-hover">
				<thead>
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
					if ($row["Alta"]==1) {
						
						if ($login_template == 1) {
			
							echo '					<tr class="bg-success">' . "\n";
			
						} else {
			
							echo '					<tr class="table-success">' . "\n";
			
						}

					} else {
						
						if ($login_template == 1) {
			
							echo '					<tr class="bg-danger">' . "\n";
			
						} else {
			
							echo '					<tr class="table-danger">' . "\n";
			
						}
					}
					if ($row["Alta"]==1) {
						
						echo '						<td>Alta <i class="bi bi-arrow-up-short"></td>' . "\n";
						
					} else {
						
						echo '						<td>Baja <i class="bi bi-arrow-down-short"></td>' . "\n";
						
					}
					echo '						<td>' . date("d/m/Y",strtotime(utf8_encode($row["Fecha"]))). '</td>' . "\n";
					echo '						<td>' . utf8_encode($row["Empleo"]). '</td>' . "\n";
					echo '						<td>' . utf8_encode($row["Solicito"]). '</td>' . "\n";
					echo '						<td>' . utf8_encode($row["Dispuso"]). '</td>' . "\n";
					echo '						<td>' . utf8_encode($row["Motivo"]). '</td>' . "\n";
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