<!doctype html>
<html lang="es">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">

<!--Bootstrap Bundle with Popper -->
<script src="./jquery/jquery-3.6.0.min.js"></script>
<script src="./bootstrap4/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap CSS -->
<link href="./bootstrap4/css/bootstrap.css" rel="stylesheet">
<link href="./bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="./bootstrap4/css/toggle-bootstrap.css">
<link rel="stylesheet" href="./bootstrap4/css/toggle-bootstrap-dark.css">
<link rel="stylesheet" href="./bootstrap4/css/toggle-bootstrap-print.css">

<!-- Custom CSS -->
<link href="./css/default.css" rel="stylesheet">

<title>CapaUno - Sistema de Gestion</title>

</head>

<?php
	if (isset($login_template)) {
            $settings = 1;
    } else {
            $settings = 0;
    }
	
	if ($settings== 1) {
		
		if ($login_template == 1) {
			
			echo '<body class="bootstrap-dark">'."\n";
			
		} else {
			
			echo '<body>'."\n";
			
		}
		
	}
	else {
		echo '<body>'."\n";
	};
?>
