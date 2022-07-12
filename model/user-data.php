<?php

    $i=1;

    if (isset($_GET["buscar"])) {
		
		require_once('./function/unwanted_character.php');
		$buscar = strtr($_GET['buscar'],$unwanted_array);
		
    } else {
        $buscar = '';
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
        FROM cu_intra_internos u "
        .$Where;

    $total_pages_results = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($total_pages_results)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $user_sql = "SELECT 
            u.Ficha,
            u.Nombre,
            u.Pabellon
        FROM cu_intra_internos u 
         "
        .$Where.
        " ORDER BY u.Nombre ASC
		LIMIT $offset, $no_of_records_per_page;";

    $user_results = mysqli_query($conn,$user_sql);

?>