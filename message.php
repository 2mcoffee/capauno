        <form id="sendmsg" method="POST" action="sendmsg.php">
			<div class="modal fade" id="MessageModal" tabindex="-1" aria-labelledby="MessageModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="MessageModalLabel"><i class="bi bi-envelope-open"></i> Mensaje</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Destinatario:</label>
									<input list="recipient-name-list" name="recipient" type="text" class="form-control" id="recipient-name" placeholder="@Usuario" maxlength="20" required>
									<datalist id="recipient-name-list">
									<?php

										require_once('./model/message-data.php');
													
										while($row = mysqli_fetch_array($enable_message_results)) {

											echo '	<option value="'.$row["Usuario"].'">'.$row["Nombre"].'</option>>'." \n";
										}
												
									?>
									</datalist>
									<input type="hidden" name="sender" value="<?php echo $login_id; ?>">
								</div>
								<div class="form-group">
									<label for="subject" class="col-form-label">Asunto:</label>
									<input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto" maxlength="50" required>
								</div>
								<div class="form-group">
									<label for="textbox" class="col-form-label">Mensaje:</label>
									<textarea class="form-control" name="message" id="textbox" rows="6" maxlength="250"></textarea>
									<div class="text-right"><small><span id="char_count">250/250</span></small></div>
									<script src="./js/message.js"></script>
								</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-sm btn-outline-primary">Enviar <i class="bi bi-send"></i></button>
						</div>
					</div>
				</div>
			</div>
		</form>
