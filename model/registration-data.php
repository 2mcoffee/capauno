<?php

    $i = 1;
    $id = $_GET["id"];

    $registration_sql = "SELECT 
							i.Nombre,
							i.DNI,
							DATE_FORMAT(i.Nacimiento, '%d/%m/%Y') as Nacimiento,
							i.Email,
							u.Unidad,
							p.Pabellon,
							i.Trabajo,
							i.Estudio,
							c.Curso,
							DATE_FORMAT(i.Registro, '%d/%m/%Y') as Registro
						FROM cu_inscripciones i
						INNER JOIN cu_pabellones p
							on i.IdPabellon = p.Id
						INNER JOIN cu_unidades u
							on p.IdUnidad = u.Id
						INNER JOIN cu_cursos c
							on i.IdCurso = c.Id
                        WHERE i.Id =".$id.";";
    
    $registration_results = mysqli_query($conn,$registration_sql);

    $user_sql = "SELECT 
        c.Nombre,
        u.Ficha,
		u.Ingreso,
		u.Origen
        FROM cu_inscripciones c
        LEFT JOIN cu_intra_internos u
        ON c.Nombre = u.Nombre
        WHERE c.Id =".$id.";";
    
    $user_results = mysqli_query($conn,$user_sql);

?>