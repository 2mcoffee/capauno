<?php

	require_once('./config/open-db.php');

	session_start();
   
	$user_check = $_SESSION['login_user'];
   
	$session_sql = "SELECT Id, Usuario, Nombre, IdRol, Tema FROM cu_logins WHERE Usuario = '$user_check' AND Activo = 1 AND IdRol = 1";
   
	$session_sql_results = mysqli_query($conn,$session_sql);
   
	$val = mysqli_fetch_array($session_sql_results);
   
	$login_user = $val['Usuario'];
	$login_nombre = $val['Nombre'];
	$login_id = $val['Id'];
	$login_rol = $val['IdRol'];
	$login_template = $val['Tema'];
   
	if(!isset($_SESSION['login_user'])){
		header("location:login.php");
		die();
	}

?>