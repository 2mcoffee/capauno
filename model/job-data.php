<?php

    $i = 1;
    $id = $_GET["id"];

    $job_sql = "SELECT e.Fecha,
						e.Empleo,
						e.Dispuso,
						e.Solicito,
						e.Alta,
						e.Motivo
					FROM cu_intra_empleos e
					INNER JOIN cu_intra_busquedaempleos b
						ON e.Nombre = b.Nombre
                    WHERE b.Id =".$id."
					ORDER BY e.Fecha ASC, e.Alta ASC;";
    
    $job_results = mysqli_query($conn,$job_sql);

    $user_sql = "SELECT 
        e.Nombre,
        u.Ficha,
		u.Ingreso,
		u.Origen
        FROM cu_intra_busquedaempleos e
        LEFT JOIN cu_intra_internos u
        ON e.Nombre = u.Nombre
        WHERE e.Id =".$id.";";
    
    $user_results = mysqli_query($conn,$user_sql);






?>