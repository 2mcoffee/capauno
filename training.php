<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container mb-4">
        <?php
			require_once('./model/training-data.php');

			while($row = mysqli_fetch_array($user_results)) {
        ?>
        <div class="w-100 text-left mb-4">
            <a class="btn btn-outline-primary d-print-none" href="./course.php" data-tooltip="tooltip" data-placement="top" title="Listado"><i class="bi bi-list-nested"></i></a>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="window.history.go(-1); return false;" data-tooltip="tooltip" data-placement="top" title="Volver"><i class="bi bi-arrow-left"></i></a>
            <?php
                if ($row["Ficha"] != NULL) {
                    echo '            <a class="btn btn-outline-dark d-print-none" href="./profile.php?ficha='.$row["Ficha"].'&referencia=1" data-tooltip="tooltip" data-placement="top" title="Ficha"><i class="bi bi-person"></i></a>'. "\n";
                }
            ?>
            <a class="btn btn-outline-dark d-print-none" href="#" onclick="print()" data-tooltip="tooltip" data-placement="top" title="Imprimir"><i class="bi bi-printer"></i></a>
        </div>
        <div class="alert alert-primary mb-4" role="alert">
            <i class="bi bi-info-circle"></i> <strong>Información:</strong> Los datos visualizados pertenecen al interno <?php echo $row["Nombre"]. "\n"; ?>
        </div>
        <?php
            }

            while($row = mysqli_fetch_array($training_results)) {
        ?> 
        <h5 class="text-secondary text-justify-center">Curso N°<?php echo $i; $i++; ?></h5> 
        <div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Capacitación</strong></small></span>
				<br>
				<?php echo $row["Curso"]. "\n"; ?>
		    </div>
            <div class="col-sm-2 mb-1">
				<span><small><strong>Unidad</strong></small></span>
				<br>
                <?php echo $row["Unidad"]. "\n"; ?>
			</div>
			<div class="col-sm-2 mb-1">
				<span><small><strong>Rubro</strong></small></span>
				<br>
				<?php echo $row["Categoria"]. "\n"; ?>
			</div>
			<div class="col-sm-2 mb-1">
				<span><small><strong>Tipo</strong></small></span>
				<br>
				<?php echo $row["Tipo"]. "\n"; ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Entidad</strong></small></span>
				<br>
				<?php echo $row["Entidad"]. "\n"; ?>
			</div>
		</div>
        <div class="row mb-2">
			<div class="col-sm-3 mb-1">
				<span><small><strong>Desde</strong></small></span>
				<br>
                <?php
					echo $row["Inicio"]. "\n";
                ?>
		    </div>
			<div class="col-sm-2 mb-1">
				<span><small><strong>Hasta</strong></small></span>
				<br>
				<?php
					echo $row["Fin"]. "\n";
                ?>
			</div>
			<div class="col-sm-2 mb-1">
				<span><small><strong>Año</strong></small></span>
				<br>
				<?php
					echo $row["Ciclo"]. "\n";
                ?>
			</div>
            <div class="col-sm-2 mb-1">
				<span><small><strong>Estado</strong></small></span>
				<br>
				<?php
					if ($row["Estado"] == 'NO') {
						echo '<span class="badge bg-danger text-white">ABANDONADO</span>'. "\n";
					} elseif ($row["Estado"] == 'SI') {
						echo '<span class="badge bg-success text-white">FINALIZADO</span>'. "\n";
					} else {
						echo '<span class="badge bg-warning text-white">'.$row["Estado"].'</span>'. "\n";
					}
                ?>
			</div>
			<div class="col-sm-3 mb-1">
				<span><small><strong>Observaciones</strong></small></span>
				<br>
				<?php
                    echo $row["Motivo"]. "\n";
                ?>
			</div>
		</div>     
        <hr>
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