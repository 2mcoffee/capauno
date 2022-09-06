<?php

    $Id = $_GET["id"];

    $unread_sql = "SELECT COUNT(*) as Total FROM cu_intra_notificaciones WHERE Receptor = $Id AND Estado = 0;";

    $unread_results = mysqli_query($conn,$unread_sql);

?>