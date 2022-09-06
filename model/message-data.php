<?php
    
    $Id = $_GET["id"];

    $enable_message_sql = "SELECT 
                    concat('@',Usuario) as Usuario,
                    Nombre
					FROM cu_logins
                    WHERE Id <> $Id AND Mensajes = 1
                    ORDER BY Nombre ASC;";

    $enable_message_results = mysqli_query($conn,$enable_message_sql);

?>