<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container">
		<?php
			require_once('./model/inscription-data.php');

			if ($alert == 1) {
					echo '	<div class="w-100 mb-4">' . "\n";
					echo '				<div class="alert alert-primary alert-dismissible fade show" role="alert">' . "\n";
					echo '					Actualmente hay <strong>'.$total_rows.'</strong> internos registrados para cursar durante el ciclo lectivo.' . "\n";
					echo '					<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n";
					echo '						<span aria-hidden="true">&times;</span>' . "\n";
					echo '					</button>' . "\n";
					echo '				</div>' . "\n";
					echo '			</div>' . "\n";
				}

		?>
		<div class="w-100 shadow-sm p-3 mb-5 bg-body rounded">
			<div><div class="icon-holder"><i class="bi bi-pc-display text-primary"></i></div> <strong>Búsqueda de Inscriptos</strong></div>
			<div class="p-2"></div>
			<div class="row">
				<div class="col-sm-12">
					<form class="form" action="./inscription.php" method="get">
						<div class="form-group">
							<input type="text" class="form-control form-control-lg" name="buscar" placeholder="Filtro de búsqueda" minlength="3" required>
							<small class="form-text text-muted">Nombre o Apellido del interno.</small>
						</div>                         
						<div class="form-group">
							<input type="hidden" value="1" name="tipo">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								<i class="bi bi-search"></i> Buscar
							</button> 
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-sm-3 text-left mb-2">
				<label class="sr-only" for="inlineFormInputGroupUserNombre">Filtro</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="bi bi-filter"></i></div>
					</div>
					<input type="text" Nombre="FilterInput" class="form-control" id="FilterInput" onkeyup="FilterFunction()" placeholder="Filtro">
				</div>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6 text-right">
				<a class="btn btn-sm btn-outline-primary d-print-none" data-tooltip="tooltip" data-placement="top" title="Listado"  href="./inscription.php">
					<i class="bi bi-list-nested"></i> Listado
				</a>
			</div>
		</div>
		<div class="table-responsive-sm mb-4" id="FilterTable">
			<table class="table table-borderless table-hover">
				<thead class="border-left border-primary border-4 shadow-sm">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Interno</th>
						<th scope="col">Curso</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
			<?php
					
				

				while($row = mysqli_fetch_array($inscription_results)) {

					echo '					<tr>' . "\n";
					echo '						<th scope="row">' .$i. '</th>' . "\n";
					$i++;
					echo '						<td>' . "\n";
					if ($row["Recomendado"]==1) {
						echo '							'.$row["Nombre"]. ' <span><i class="bi bi-patch-check-fill text-cyan"></i></span>' . "\n";
					} else {
						echo '							'.$row["Nombre"]. "\n";
					}
					echo '						</td>' . "\n";
					echo '						<td>' . $row["Curso"]. '</td>' . "\n";
					echo '						<td>' . "\n";
					if ($row["Ficha"] != NULL) {
						echo '						<a href="./profile.php?ficha='.$row["Ficha"].'&nombre='.$row["Nombre"].'&referencia=2" class="btn btn-sm btn-outline-primary" data-tooltip="tooltip" data-placement="bottom" title="Ficha">' . "\n";
						echo '							<i class="bi bi-person"></i>' . "\n";
						echo '						</a>' . "\n";
					} else {
						echo '						<a class="btn btn-sm btn-outline-secondary" data-tooltip="tooltip" data-placement="bottom" title="Sin Ficha">' . "\n";
						echo '							<i class="bi bi-person"></i>' . "\n";
						echo '						</a> ' . "\n";
					}
						echo '							<a class="btn btn-sm btn-outline-primary" href="./registration.php?id='.$row["Id"].'" data-tooltip="tooltip" data-placement="bottom" title="Inscripcion">' . "\n";
						echo '								<i class="bi bi-clipboard-check"></i>' . "\n";
						echo '							</a>' . "\n";
					echo '						</td>' . "\n";
					echo '					</tr>' . "\n";
				}
			?>
				</tbody>
			</table>
		</div>
		<div class="w-100 mb-2 text-center">
			<span class="text-muted">
				<small>
					Página <?php echo $page;?> de 
					<?php 
					if ($total_pages<1)
						echo '1';
					else 
						echo $total_pages;
					?>
				</small>
			</span>
		</div>
		<nav>
			<ul class="pagination pagination-sm justify-content-center">
				<li class="page-item <?php if($total_pages <= 1){ echo 'disabled'; } ?>">
					<span class="page-link"><a href="<?php echo "?page=1&tipo=".$tipo."&buscar=".$buscar;?>">Primera</a></span>
				</li>
				<li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
					<a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1)."&tipo=".$tipo."&buscar=".$buscar; } ?>">Previa</a>
				</li>
				<li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>">
					<a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1)."&tipo=".$tipo."&buscar=".$buscar; } ?>">Próxima</a>
				</li>
				<li class="page-item <?php if($total_pages <= 1){ echo 'disabled'; } ?>">
					<a class="page-link" href="?page=<?php echo $total_pages."&tipo=".$tipo."&buscar=".$buscar; ?>">Última</a>
				</li>
			</ul>
		</nav>
	</div>
	<!--Funcion de filtrado -->
	<script src="./js/filter.js"></script>
	<!--Funcion Tooltip-->
	<script src="./bootstrap4/js/bootstrap-tooltip.min.js"></script>
<?php
require_once('./include/settings.php');
require_once('./config/close-db.php');
require_once('./include/copyright.php');
require_once('./include/footer.php');
?>