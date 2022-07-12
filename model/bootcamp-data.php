<?php

    $i = 1;
    $id = $_GET["id"];

    $bootcamp_sql = "SELECT 
						c.Taller,
						'U-01 LISANDRO OLMOS' as Unidad,
						c.Inicio,
						c.Fin,
						c.Entidad,
						c.Estado,
						c.Motivo
						FROM cu_intra_talleres c
                        INNER JOIN cu_intra_busquedatalleres i
                        ON c.Nombre = i.Nombre
                        WHERE i.Id =".$id."
						 ORDER BY c.Inicio ASC;";
    
    $bootcamp_results = mysqli_query($conn,$bootcamp_sql);

    $user_sql = "SELECT 
        c.Nombre,
        u.Ficha
        FROM cu_intra_busquedatalleres c
        LEFT JOIN cu_intra_internos u
        ON c.Nombre = u.Nombre
        WHERE c.Id =".$id.";";
    
    $user_results = mysqli_query($conn,$user_sql);

?>