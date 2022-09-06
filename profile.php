<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container mb-4">
		<?php
			require_once('./model/profile-data.php');

			while($row = mysqli_fetch_array($profile_results)) {
        ?>
		<div class="w-100 text-left mb-4">
			<?php
			if ($row["Boton"]==1) {
            	echo '			<a class="btn btn-outline-primary d-print-none" href="./course.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			} elseif ($row["Boton"]==0) {
				echo '			<a class="btn btn-outline-primary d-print-none" href="./user.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			} elseif ($row["Boton"]==2) {
				echo '			<a class="btn btn-outline-primary d-print-none" href="./inscription.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			} elseif ($row["Boton"]==3) {
				echo '			<a class="btn btn-outline-primary d-print-none" href="./work.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			} elseif ($row["Boton"]==4) {
				echo '			<a class="btn btn-outline-primary d-print-none" href="./learning.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			} elseif ($row["Boton"]==5) {
				echo '			<a class="btn btn-outline-primary d-print-none" href="./workshop.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>'. "\n";
			}
			?>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="window.history.go(-1); return false;" data-tooltip="tooltip" data-placement="top" title="Volver"><i class="bi bi-arrow-left"></i></a>
			<?php
			if ($row["Boton"]==1) {
            	echo '			<a class="btn btn-outline-dark d-print-none" href="./training.php?id='.$row["Id"].'" data-tooltip="tooltip" data-placement="top" title="Cursos"><i class="bi bi-folder"></i></a>'. "\n";
			}
			?>
			<a class="btn btn-outline-dark d-print-none" href="#" onclick="print()" data-tooltip="tooltip" data-placement="top" title="Imprimir"><i class="bi bi-printer"></i></a>
        </div>
		<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-person-fill text-primary"></i></div> Datos personales</h5></div>
		<div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Ficha</strong></small></span>
				<br>
				<?php echo $row["ficha"]. "\n"; ?>
		    </div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Interno</strong></small></span>
				<br>
				<?php echo $row["interno"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Alias</strong></small></span>
				<br>
				<?php echo $row["alias"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>F. Nacimiento</strong></small></span>
				<br>
				<?php echo $row["nacimiento"]. "\n"; ?>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Domicilio</strong></small></span>
				<br>
				<?php echo $row["domicilio"].", ".$row["localidad"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
			    <span><small><strong>Nacionalidad</strong></small></span>
				<br>
				<?php echo $row["nacionalidad"]. "\n"; ?>
		    </div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Estudios</strong></small></span>
				<br>
				<?php echo $row["estudios"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Oficio</strong></small></span>
				<br>
				<?php echo $row["oficio"]. "\n"; ?>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Estado U-1</strong></small></span>
				<br>
				<?php 
				if ($row["activo"] == 1) {
					echo '<span class="badge badge-primary">Activo <i class="bi bi-check"></i></span>'. "\n";
				} else {
					echo '<span class="badge bg-danger text-white">Baja</span>'. "\n";
				}
				?>
			</div>
			<div class="col-sm-3 mb-1">
		    </div>
			<div class="col-sm-3 mb-1">
			</div>
			<div class="col-sm-3 mb-1">
			</div>
		</div>
		<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-shield text-primary"></i></div> Servicio Penitenciario</h5></div>
		<div class="row mb-4">
			<div class="col-sm-3 mb-1">
			    <span><small><strong>F. Ingreso</strong></small></span>
				<br>
				<?php echo $row["ingreso"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Procedente</strong></small></span>
				<br>
				<?php echo $row["procedente"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Régimen</strong></small></span>
				<br>
				<?php echo $row["regimen"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Peligrosidad</strong></small></span>
				<br>
			    <?php echo $row["peligrosidad"]. "\n"; ?>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Piso y Pabellón</strong></small></span>
				<br>
				<?php echo $row["pisopab"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Conducta</strong></small></span>
				<br>
				<?php echo $row["conducta"]. "\n"; ?>
			</div>
		</div>
		<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-wrench-adjustable text-primary"></i></div> Información laboral</h5></div>
		<div class="row mb-4">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Sector</strong></small></span>
				<br>
				<?php echo $row["trabajo"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Puesto</strong></small></span>
				<br>
				<?php echo $row["puesto"]. "\n"; ?>
			</div>
		</div>
		<div class="border-left border-primary border-4 rounded shadow-sm mb-2 p-2"><h5 class="font-weight-light"> <div class="icon-holder"><i class="bi bi-fingerprint text-primary"></i></div> Información judicial</h5></div>
		<div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Causa</strong></small></span>
				<br>
				<?php echo $row["causa"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Caratula</strong></small></span>
				<br>
				<span id="show-data" style="display:none;"><?php echo $row["Caratula"]. "\n"; ?></span> <button class="btn btn-sm btn-outline-primary toggle-button" onclick="eye(this)" data-tooltip="tooltip" data-placement="top" title="Caratula"><i class="bi bi-eye"></i></button>
				<script src="./js/eye.js"></script>
			</div>
		    <div class="col-sm-3 mb-1">
				<span><small><strong>Juzgado</strong></small></span>
				<br>
				<?php echo $row["juzgado"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Depto. Judicial</strong></small></span>
				<br>
				<?php echo $row["deptojudicial"]. "\n"; ?>
			</div>
		</div>
		<div class="row mb-4">
		    <div class="col-sm-3 mb-1">
				<span><small><strong>Situación</strong></small></span>
				<br>
				<?php echo $row["Situacion"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Condena</strong></small></span>
				<br>
				<?php echo $row["Condena"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Reincidencia</strong></small></span>
				<br>
				<?php echo $row["reincidencias"]. "\n"; ?>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
            <?php
					}
			?>
	</div>
    <!--Funcion Tooltip-->
	<script src="./bootstrap4/js/bootstrap-tooltip.min.js"></script>
<?php
require_once('./include/settings.php');
require_once('./config/close-db.php');
require_once('./include/copyright.php');
require_once('./include/footer.php');
?>