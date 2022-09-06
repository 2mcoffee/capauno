<?php

    $welcome_sql = "SELECT 
	(SELECT Bienvenida FROM cu_logins WHERE Id = $login_id) AS Bienvenida,
	(SELECT count(*) FROM cu_intra_notificaciones WHERE Estado = 0 AND Receptor = $login_id) AS Notificaciones,
	(SELECT Fecha FROM cu_actualizaciones WHERE Id = 1) AS Actualizacion,
	(SELECT count(*) FROM cu_intra_internos) AS Internos,
	(SELECT count(DISTINCT Curso) FROM cu_intra_cursos WHERE Estado = 'EN CURSO' AND Ciclo = '2022') AS Cursos,
	(SELECT count(*) FROM cu_intra_cursos WHERE Estado = 'EN CURSO' AND Ciclo = '2022') AS Matriculas;";

	$welcome_results = mysqli_query($conn,$welcome_sql);

	$stats_sql = "SELECT 
	(SELECT COUNT(*) FROM cu_intra_cursos WHERE Ciclo = '2022') AS Matriculas,
	(SELECT COUNT(*) FROM cu_intra_cursos WHERE Ciclo = '2022' AND Estado = 'SI') AS Finalizados,
	(SELECT COUNT(*) FROM cu_intra_cursos WHERE Ciclo = '2022' AND Estado = 'EN CURSO') AS Cursando,
	(SELECT COUNT(*) FROM cu_intra_cursos WHERE Ciclo = '2022' AND Estado = 'NO') AS Bajas;";

	$stats_results = mysqli_query($conn,$stats_sql);

	$chart_sql ="SELECT
					Curso,
					count(*) as Total
				FROM cu_intra_cursos
				WHERE Estado = 'EN CURSO'
				GROUP BY Curso;";
    
	$chart_results = mysqli_query($conn,$chart_sql);

	$pie_sql ="SELECT Titulo,
	Valor FROM cu_stats_matriculas;	";

	$pie_results = mysqli_query($conn,$pie_sql);
    
	$chart_data="";
         
?>