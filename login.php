<?php
   require_once('./controller/login.php');
   require_once('./include/header.php');
?>
	<div class="container signin text-center">
		<div class="box-signin shadow rounded p-4 mb-4">
			<form action ="" method ="post" class="form-signin">
				<div class="mb-4">
					<img class="img-fluid unselectable" src="./img/logo-nav-square.png" alt="intranet">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="bi bi-person-fill"></i></div>
					</div>
					<input type="text" class="form-control" name="username" placeholder="Usuario" required autofocus>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="bi bi-key-fill"></i></div>
					</div>
					<input type="password" class="form-control" name="password" placeholder="Clave" required>
				</div>
				<div class="mb-4">
					<input class="btn btn-primary btn-block" type = "submit" value = "Entrar">
					<a class="btn btn-outline-primary btn-block" href="./password.php">Olvide mi clave</a>
				</div>
				<?php
					if (isset($error)) {
						echo '            <div class="alert alert-danger alert-signin" role="alert">
							<i class="bi bi-exclamation-triangle"></i> Usuario y/o clave inválidos.
						</div>';
					} else {
						echo '            <div class="alert alert-primary alert-signin" role="alert">
							<i class="bi bi-info-circle"></i> Ingresar clave y usuario.
						</div>';
					}
				?>
			</form>
		</div>	
	<?php
		require_once('./include/copyright.php');
	?>
	</div>
<?php
   require_once('./include/footer.php');
?>