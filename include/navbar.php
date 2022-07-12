<?php
	if (isset($login_id)) {
            $navbar = 1;
    } else {
            $navbar = 0;
    }
?>
	<!--Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-themed">
		<a class="navbar-brand" href="./welcome.php">
			<img class="img-fluid unselectable" src="./img/logo-nav.png" alt="S.P.B">
		</a>
		<?php 
			if ($navbar == 1) {
		?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="./welcome.php"><i class="bi bi-house"></i> Inicio</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="bi bi-search"></i> Búsquedas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./course.php"><i class="bi bi-clipboard2-data-fill"></i> Capacitaciones</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./work.php"><i class="bi bi-wrench-adjustable"></i> Empleos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./learning.php"><i class="bi bi-mortarboard-fill"></i> Estudios</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./user.php"><i class="bi bi-people-fill"></i> Perfiles</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./workshop.php"><i class="bi bi-book-half"></i> Talleres</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./inscription.php"><i class="bi bi-pc-display"></i> Inscripciones</a>
						<!--<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="./stats.php"><i class="bi bi-graph-up"></i> Estadísticas</a>-->
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#settingsModal"><i class="bi bi-gear"></i> Ajustes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://api.whatsapp.com/send?phone=5492212215419"><i class="bi bi-life-preserver"></i> Ayuda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./logout.php"><i class="bi bi-arrow-right-square"></i> Salir</a>
				</li>
			</ul>
			<div class="my-2 my-lg-0">
				<span class="p-2 alert-primary  rounded"><i class="bi bi-person-circle"></i> <?php echo $login_user ?></span>
			</div>
		</div>
		<?php
			};
		?>
	</nav>
    <div class="p-4"></div>
    