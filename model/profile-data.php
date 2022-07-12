<?php

    $ficha = $_GET["ficha"];
    $referencia = $_GET["referencia"];

    if (isset($_GET["nombre"])) {
		require_once('./function/unwanted_character.php');
		$buscar = strtr($_GET['nombre'],$unwanted_array);
    } else {
        $nombre = '';
    }

    if ($referencia==1) {
        $profile_sql = "SELECT 
            c.Id as Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            i.Ingreso as ingreso,
            i.Reincidencia as reincidencias,
            i.Nacimiento as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '1' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        INNER JOIN cu_intra_busquedacursos c
        ON i.Nombre = c.Nombre
        WHERE i.Ficha = '".$ficha."'";
    } elseif ($referencia==5) {
		$profile_sql = "SELECT 
            e.Id as Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            i.Ingreso as ingreso,
            i.Reincidencia as reincidencias,
            i.Nacimiento as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '5' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        INNER JOIN cu_intra_busquedatalleres e
        ON i.Nombre = e.Nombre
        WHERE i.Ficha = '".$ficha."'";
	} elseif ($referencia==4) {
		$profile_sql = "SELECT 
            e.Id as Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            i.Ingreso as ingreso,
            i.Reincidencia as reincidencias,
            i.Nacimiento as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '4' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        INNER JOIN cu_intra_busquedaestudios e
        ON i.Nombre = e.Nombre
        WHERE i.Ficha = '".$ficha."'";
	}	elseif ($referencia==3) {
        $profile_sql = "SELECT 
            e.Id as Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            i.Ingreso as ingreso,
            i.Reincidencia as reincidencias,
            i.Nacimiento as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '3' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        INNER JOIN cu_intra_busquedaempleos e
        ON i.Nombre = e.Nombre
        WHERE i.Ficha = '".$ficha."'";
    } elseif ($referencia==0) {
        $profile_sql = "SELECT 
            i.Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            DATE_FORMAT(i.Ingreso, '%d/%m/%Y') as ingreso,
            i.Reincidencia as reincidencias,
            DATE_FORMAT(i.Nacimiento, '%d/%m/%Y') as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '0' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        WHERE i.Ficha = '".$ficha."' AND i.Nombre LIKE '%".$buscar."%'";
    } elseif ($referencia==2) {
        $profile_sql = "SELECT 
            i.Id,
            i.Nombre as interno,
            i.Alias as alias,
            i.Peligrosidad as peligrosidad,
            i.Ficha as ficha,
            i.Pabellon as pisopab,
            i.Conducta as conducta,
            i.Origen as procedente,
            '' as regimen,
            i.Departamental as deptojudicial,
            i.Juzgado as juzgado,
            i.Trabajo as trabajo,
            i.Area as puesto,
            i.Oficio as oficio,
            i.Causa as causa,
            DATE_FORMAT(i.Ingreso, '%d/%m/%Y') as ingreso,
            i.Reincidencia as reincidencias,
            DATE_FORMAT(i.Nacimiento, '%d/%m/%Y') as nacimiento,
            i.Domicilio as domicilio,
            i.Ciudad as localidad,
            i.Nacionalidad as nacionalidad,
            i.Estudios as estudios,
            '1' as activo,
            '2' as Boton,
			i.Caratula as Caratula,
			i.Situacion as Situacion,
			i.Condena as Condena
        FROM cu_intra_internos i
        WHERE i.Ficha = '".$ficha."' AND i.Nombre LIKE '%".$buscar."%'";
    }

    $profile_results = mysqli_query($conn,$profile_sql);

?>