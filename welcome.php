<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container">
		<?php
			require_once('./model/welcome-data.php');

			while($row = mysqli_fetch_array($update_results)) {
        ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong><i class="bi bi-info-circle"></i> Información:</strong> La última actualización de la base de datos se realizó el día <?php echo  date("d/m/Y H:m:s",strtotime(utf8_encode($row["Fecha"]))) ?>.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php
			}
		?>
		<div class="w-90 mb-4 p-2">
			<h1 class="display-5">¡Hola <?php echo $login_nombre; ?>!</h1>
			<p class="lead">Te damos la bienvenida. Con increíble facilidad, y desde un único punto, podrás administrar todas las tareas diarias y  planificar a futuro la gestión, ahorrando tiempo y esfuerzo.</p>
		</div>
		<div class="card-deck mb-4">
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-people-fill"></i> Perfiles</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Información centralizada de todos los internos de la Unidad N°1.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./user.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-clipboard2-data-fill"></i> Capacitaciones</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Información regional de capacitaciones de internos.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./course.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-wrench-adjustable"></i> Empleos</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Historial de empleos de internos de la Unidad N°1.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./work.php">Comenzar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card-deck mb-4">
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-mortarboard-fill"></i> Estudios</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Historial de cursadas en colegio primario, secundario y en universidad.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./learning.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-book-half"></i> Talleres</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Historial de talleres de capacitación del área de educación.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./workshop.php">Comenzar</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header"><i class="bi bi-pc-display"></i> Inscripciones</div>
				<div class="card-body">
					<div class="card-text mb-2">
						Revisión de inscripciones para cursos del ciclo lectivo vigente.
					</div>
					<div>
						<a class="btn btn-sm btn-primary" href="./inscription.php">Comenzar</a>
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