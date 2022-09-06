<?php
require_once('./controller/session.php');
require_once('./include/header.php');
require_once('./include/navbar.php');
?>
	<div class="container">
		<div class="row mb-4">
			<div class="col-8 col-sm-6">
				<div class="icon-holder">
					<i class="bi bi-send"></i>
				</div>
				<span class="font-weight-light">Bandeja de Salida</span>
			</div>
			<div class="col-4 col-sm-6 text-right">
				<?php

					require_once('./model/outbox-data.php');

					if ($compose_button == 1) {
						echo '<a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#MessageModal" > <i class="bi bi-envelope-plus"></i> Redactar</a>'." \n";
					};

				?>
            </div>
		</div>
		<div class="row">
			<div class="col-sm-3 mb-4">
				<?php
					
					require_once('./include/navbar-msg.php');
				
				?>
			</div>
			<div class="col-sm-9 mb-4">
				<?php
						
					while($row = mysqli_fetch_array($messages_results)) {
					
				?>
				<div class="shadow-sm mb-4 border">
					<div class="px-4 py-3 border-bottom">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center">						        
								<div class="icon-holder-h3">
									<h3><i class="bi bi-chat-quote"></i></h3>
								</div>
							</div>
							<div class="col-12 col-lg-auto">
								<?php 
									if ($row["Sistema"] == 1) {
										echo '<div><span class="badge badge-primary">Sistema</span></div>'."\n";
									} else {
										echo '<div><span class="badge badge-primary">Usuario</span></div>'."\n";

									}
								?>
								<h4 class="mb-1 d-inline"><?php echo $row["Asunto"]; ?></h4>	
								<ul class="list-inline mb-0">
									<?php 
										if ($row["Dias"] == 0) {
											echo '<li class="list-inline-item"><small> Hoy | @'.$row["Usuario"].'</small></li>'."\n";
										} else {
											echo '<li class="list-inline-item"><small> Hace '.$row["Dias"].' días | @'.$row["Usuario"].'</small></li>'."\n";
										}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="p-3">
						<div><?php echo $row["Mensaje"]; ?></div>
					</div>
					<div class="px-4 py-3 bg-light">
						<!--<a class="btn btn-sm btn-outline-primary" href="./message.php?id=<?php //echo $row["Id"]; ?>">Abrir mensaje <i class="bi bi-envelope-paper"></i></a>-->
						<!--<a class="btn btn-sm btn-outline-primary" href="#">Abrir mensaje <i class="bi bi-envelope-paper"></i></a>-->
					</div>
				</div>
				<?php
					}
				?>
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
							<span class="page-link"><a href="<?php echo "?page=1&id=".$Id;?>">Primera</a></span>
						</li>
						<li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
							<a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1)."&id=".$Id; } ?>">Previa</a>
						</li>
						<li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>">
							<a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1)."&id=".$Id; } ?>">Próxima</a>
						</li>
						<li class="page-item <?php if($total_pages <= 1){ echo 'disabled'; } ?>">
							<a class="page-link" href="?page=<?php echo $total_pages."&id=".$Id; ?>">Última</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<?php
			if ($compose_button == 1) {

				require_once('./message.php');
				require_once('./toast.php');
				
			};
		?>
	</div>
<?php
require_once('./include/settings.php');
require_once('./config/close-db.php');
require_once('./include/copyright.php');
require_once('./include/footer.php');
?>