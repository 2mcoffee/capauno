                <?php
					
					require_once('./model/navbar-msg-data.php');

					while($row = mysqli_fetch_array($unread_results)) {
				
				?>
				<ul class="list-group">
					<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
						<a class="text-decoration-none stretched-link" href="./inbox.php?id=<?php echo $login_id; ?>">Entrada</a>
						<span class="badge badge-primary badge-pill"><?php echo $row["Total"]; ?></span>
					</li>
					<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
					<a class="text-decoration-none stretched-link" href="./outbox.php?id=<?php echo $login_id; ?>">Salida</a>
					</li>
				</ul>
				<?php
					}
				?>