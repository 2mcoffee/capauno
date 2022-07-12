<?php

    $i=1;

    if (isset($_GET["buscar"])) {
		
		require_once('./function/unwanted_character.php');
		$buscar = strtr($_GET['buscar'],$unwanted_array);
		$alert=0;
		
    } else {
        $buscar = '';
		$alert=1;
    }
	
    if (isset($_GET["tipo"])) {
        $tipo = $_GET["tipo"];
    } else {
        $tipo = '';
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    if ($tipo == 1) {              
        $Where = "WHERE u.Nombre LIKE '%".$buscar."%'";
    } 
    else {
        $Where = '';
    };
	

    $no_of_records_per_page = 100;
    $offset = ($page-1) * $no_of_records_per_page;

    $total_pages_sql = "SELECT
        COUNT(*)
        FROM cu_inscripciones u "
        .$Where;

    $total_pages_results = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($total_pages_results)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $inscription_sql = "SELECT 
            i.Ficha,
            u.Nombre,
            p.Curso,
			u.Id,
			CASE
				WHEN (u.Trabajo = 0 AND u.Estudio = 0) THEN '1'
				ELSE '0'
			END as Recomendado
        FROM cu_inscripciones u
		LEFT JOIN cu_intra_internos i 
		ON u.Nombre = i.Nombre
		INNER JOIN cu_cursos p
		ON u.IdCurso = p.Id
         "
        .$Where.
        " ORDER BY u.Nombre ASC
		LIMIT $offset, $no_of_records_per_page;";

    $inscription_results = mysqli_query($conn,$inscription_sql);

?>