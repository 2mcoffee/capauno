<?php

    $i = 1;
    $id = $_GET["id"];

    $school_sql = "SELECT n.Nivel,
						c.Turno,
						c.Grado as Ciclo,
						c.Inicio,
						c.Fin,
						c.Motivo,
						c.Activo
					FROM cu_intra_colegio c
					INNER JOIN cu_intra_busquedaestudios e
						ON c.Nombre = e.Nombre
					INNER JOIN cu_intra_niveleseducativos n
						ON c.IdNivelEducativo = n.Id
                    WHERE e.Id =".$id." AND c.IdNivelEducativo = 1
					ORDER BY c.IdNivelEducativo ASC, c.Inicio ASC;";
    
    $school_results = mysqli_query($conn,$school_sql);
	
	$highschool_sql = "SELECT n.Nivel,
						c.Turno,
						c.Grado,
						c.Inicio,
						c.Fin,
						c.Motivo,
						c.Activo
					FROM cu_intra_colegio c
					INNER JOIN cu_intra_busquedaestudios e
						ON c.Nombre = e.Nombre
					INNER JOIN cu_intra_niveleseducativos n
						ON c.IdNivelEducativo = n.Id
                    WHERE e.Id =".$id." AND (c.IdNivelEducativo = 2 OR c.IdNivelEducativo = 3)
					ORDER BY c.IdNivelEducativo ASC, c.Inicio ASC;";
    
    $highschool_results = mysqli_query($conn,$highschool_sql);
	
	
	$university_sql = "SELECT n.Nivel,
						u.Carrera,
						u.Inicio,
						u.Fin,
						u.Motivo,
						u.Activo
					FROM cu_intra_universidad u
					INNER JOIN cu_intra_busquedaestudios e
						ON u.Nombre = e.Nombre
					INNER JOIN cu_intra_niveleseducativos n
						ON u.IdNivelEducativo = n.Id
                    WHERE e.Id =".$id."
					ORDER BY u.Inicio ASC;";
    
    $university_results = mysqli_query($conn,$university_sql);
	
	$technical_sql = "SELECT n.Nivel,
						t.Carrera,
						t.Ciclo,
						t.Inicio,
						t.Fin,
						t.Motivo,
						t.Activo
					FROM cu_intra_terciario t
					INNER JOIN cu_intra_busquedaestudios e
						ON t.Nombre = e.Nombre
					INNER JOIN cu_intra_niveleseducativos n
						ON t.IdNivelEducativo = n.Id
                    WHERE e.Id =".$id."
					ORDER BY t.Inicio ASC;";
    
    $technical_results = mysqli_query($conn,$technical_sql);
	
    $user_sql = "SELECT 
        e.Nombre,
        u.Ficha
        FROM cu_intra_busquedaestudios e
        LEFT JOIN cu_intra_internos u
        ON e.Nombre = u.Nombre
        WHERE e.Id =".$id.";";
    
    $user_results = mysqli_query($conn,$user_sql);

?>