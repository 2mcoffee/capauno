<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container mb-4">
        <?php
			require_once('./model/registration-data.php');

			while($row = mysqli_fetch_array($user_results)) {
        ?>
        <div class="w-100 text-left mb-4">
            <a class="btn btn-outline-primary d-print-none" href="./inscription.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="window.history.go(-1); return false;" data-tooltip="tooltip" data-placement="top" title="Volver"><i class="bi bi-arrow-left"></i></a>
            <?php
                if ($row["Ficha"] != NULL) {
                    echo '            <a class="btn btn-outline-dark d-print-none" href="./profile.php?ficha='.$row["Ficha"].'&nombre='.$row["Nombre"].'&referencia=2" data-tooltip="tooltip" data-placement="top" title="Ficha"><i class="bi bi-person"></i></a>'. "\n";
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

            while($row = mysqli_fetch_array($registration_results)) {
        ?> 
        <div class="row mb-2">
			<div class="col-sm-3 mb-2">
				<span><small><strong>Nombre</strong></small></span>
				<br>
				<?php echo $row["Nombre"]. "\n"; ?>
		    </div>
            <div class="col-sm-2 mb-2">
				<span><small><strong>Fecha Registro</strong></small></span>
				<br>
                <?php echo $row["Registro"]. "\n"; ?>
			</div>
			<div class="col-sm-2 mb-2">
				<span><small><strong>DNI</strong></small></span>
				<br>
				<?php echo $row["DNI"]. "\n"; ?>
			</div>
			<div class="col-sm-2 mb-2">
				<span><small><strong>Fecha Nacimiento</strong></small></span>
				<br>
				<?php echo $row["Nacimiento"]. "\n"; ?>
			</div>
			<div class="col-sm-3">
				<span><small><strong>Email</strong></small></span>
				<br>
				<?php echo $row["Email"]. "\n"; ?>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-sm-3 mb-2">
				<span><small><strong>Unidad</strong></small></span>
				<br>
				<?php echo $row["Unidad"]. "\n"; ?>
		    </div>
            <div class="col-sm-2 mb-2">
				<span><small><strong>Pabellon</strong></small></span>
				<br>
                <?php echo $row["Pabellon"]. "\n"; ?>
			</div>
			<div class="col-sm-2 mb-2">
				<span><small><strong>Trabajo</strong></small></span>
				<br>
				<?php 
					if ($row["Trabajo"]==1) {
						echo '<span class="badge badge-primary">Si</span>'. "\n";
					} else 
						echo '<span class="badge badge-primary">No</span>'. "\n";
				?>
			</div>
			<div class="col-sm-2 mb-1">
				<span><small><strong>Estudio</strong></small></span>
				<br>
				<?php 
					if ($row["Estudio"]==1) {
						echo '<span class="badge badge-primary">Si</span>'. "\n";
					} else 
						echo '<span class="badge badge-primary">No</span>'. "\n";
				?>
			</div>
			<div class="col-sm-3 mb-2">
				<span><small><strong>Curso</strong></small></span>
				<br>
                <?php echo $row["Curso"]. "\n"; ?>
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