<?php 
    
    require_once('./controller/session.php');

    $recipient = str_replace("@","",$_POST['recipient']);
    $sender = $_POST['sender'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO cu_intra_notificaciones (Emisor,Receptor,Asunto,Mensaje)
        SELECT 
            $sender AS Emisor,
            Id AS Receptor,
            '$subject' AS Asunto,
            '$message' AS Mensaje
        FROM cu_logins
        WHERE Usuario = '$recipient'"; 

    if ($conn->query($sql)===TRUE) {
        echo json_encode(['success'=>'¡Gracias hemos recibido su mensaje!']);    
    } else {
        echo json_encode(['error'=>'Falló la ejecución.']);
    };
    
    $conn->close();
?>