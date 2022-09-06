<?php

    $i = 1;
    $id = $_GET["id"];

    $training_sql = "SELECT 
						c.Curso,
						c.Categoria,
						c.Tipo,
						c.Entidad,
						c.Inicio,
						c.Fin,
						c.Unidad,
						c.Estado,
						c.Motivo,
						c.Ciclo
						FROM cu_intra_cursos c
                        INNER JOIN cu_intra_busquedacursos i
                        ON c.Nombre = i.Nombre
                        WHERE i.Id =".$id."
						 ORDER BY c.Ciclo ASC;";
    
    $training_results = mysqli_query($conn,$training_sql);

    $user_sql = "SELECT 
        c.Nombre,
        u.Ficha,
        u.Ingreso,
		u.Origen
        FROM cu_intra_busquedacursos c
        LEFT JOIN cu_intra_internos u
        ON c.Nombre = u.Nombre
        WHERE c.Id =".$id.";";
    
    $user_results = mysqli_query($conn,$user_sql);

?>