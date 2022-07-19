<?php

    $update_sql = "SELECT Fecha, 
					DATEDIFF(CURRENT_TIMESTAMP,Fecha) AS Total 
					FROM `cu_actualizaciones` 
					WHERE Id = 1;";

    $update_results = mysqli_query($conn,$update_sql);

?>