<?php

	$esquema = $_POST['tema'];
	$id = $_POST['usuario'];
	 
	$settings_sql = "UPDATE cu_logins SET Tema = '$esquema' WHERE Id = '$id';";
	
	if (mysqli_query($conn,$settings_sql)) {
		
		echo json_encode(['success'=>'Exito']); 
		
    } else {
		
        echo json_encode(['error'=>'Error']);
		
	};

?>