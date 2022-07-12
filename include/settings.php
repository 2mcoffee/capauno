
<?php
	if (isset($login_template)) {
            $settings = 1;
    } else {
            $settings = 0;
    };
	
	if ($settings== 1) {
?>
	<!-- Modal -->
	<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="settingsModalLabel"><i class="bi bi-gear-fill"></i> Ajustes</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action ="./settings.php" id="settings" method ="post">
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupTheme"><i class="bi bi-palette"></i></label>
					</div>
					<select class="custom-select" id="inputGroupTheme" name="tema" required>
						<?php
							if ($login_template == 1) {
								echo '					<option value="" selected disabled>Tema Oscuro</option>'."\n";
								echo '					<option value="0">Tema Claro</option>'."\n";
							} else {
								echo '					<option value="" selected disabled>Tema Claro</option>'."\n";
								echo '					<option value="1">Tema Oscuro</option>'."\n";
							};
						?>
					</select>
				</div>
				<div class="text-center">
					<input type="hidden" name="usuario" value="<?php echo $login_id; ?>">
					<input type="submit" class="btn btn-primary" value="Actualizar">
				</div>
			</form>
			<!--Funcion Actualizacion-->
			<script src="./js/settings.js"></script>
		  </div>
		</div>
	  </div>
	</div>
<?php
	};
?>