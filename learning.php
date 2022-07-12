<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container">
		<div class="w-100 shadow p-3 mb-5 bg-body rounded">
			<div><strong>Búsqueda de Estudios</strong></div>
			<div class="p-2"></div>
			<div class="row">
				<div class="col-sm-12">
					<form class="form" action="./learning.php" method="get">
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
				<label class="sr-only" for="inlineFormInputGroupUsername">Filtro</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="bi bi-filter"></i></div>
					</div>
					<input type="text" name="FilterInput" class="form-control" id="FilterInput" onkeyup="FilterFunction()" placeholder="Filtro">
				</div>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6 text-right">
				<a class="btn btn-sm btn-outline-primary d-print-none" data-tooltip="tooltip" data-placement="top" title="Listado"  href="./learning.php">
					<i class="bi bi-list-nested"></i> Listado
				</a>
			</div>
		</div>
		<div class="table-responsive-sm mb-4" id="FilterTable">
			<table class="table table-sm table-hover table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Interno</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
			<?php
					
				require_once('./model/learning-data.php');

				while($row = mysqli_fetch_array($search_results)) {

					echo '					<tr>' . "\n";
					echo '						<th scope="row">' .$i. '</th>' . "\n";
					$i++;
					echo '						<td>' . utf8_encode($row["Nombre"]). '</td>' . "\n";
					echo '						<td>' . "\n";
					if ($row["Ficha"] != NULL) {
						echo '						<a href="./profile.php?ficha='.$row["Ficha"].'&referencia=4" class="btn btn-sm btn-outline-success" data-tooltip="tooltip" data-placement="bottom" title="Ficha">' . "\n";
						echo '							<i class="bi bi-person"></i>' . "\n";
						echo '						</a>' . "\n";
					} else {
						echo '						<a class="btn btn-sm btn-outline-secondary" data-tooltip="tooltip" data-placement="bottom" title="Sin Ficha">' . "\n";
						echo '							<i class="bi bi-person"></i>' . "\n";
						echo '						</a>' . "\n";
					}
					echo '						<a href="./studies.php?id='.$row["Id"].'" class="btn btn-sm btn-outline-primary" data-tooltip="tooltip" data-placement="bottom" title="Estudios"><i class="bi bi-mortarboard"></i></a>' . "\n";
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