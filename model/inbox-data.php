<?php
    
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $Id = $_GET["id"];

    $no_of_records_per_page = 5;
    $offset = ($page-1) * $no_of_records_per_page;

    $total_pages_sql = "SELECT
        COUNT(*)
        FROM cu_intra_notificaciones n WHERE n.Receptor = $Id;";

    $total_pages_results = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($total_pages_results)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $messages_sql = "SELECT 
					n.Id,
                    l.Usuario,
					n.Asunto,
                    n.Mensaje,
					DATEDIFF(CURRENT_DATE, n.Fecha) as Dias,
                    n.Sistema
                    FROM cu_intra_notificaciones n
                    INNER JOIN cu_logins l
                    ON n.Emisor = l.Id
                    WHERE n.Receptor = $Id
                    ORDER BY Fecha DESC
                    LIMIT $offset, $no_of_records_per_page;";

    $messages_results = mysqli_query($conn,$messages_sql);

    $compose_sql = "SELECT Mensajes FROM cu_logins n WHERE n.Id = $Id;";
    $compose_results = mysqli_query($conn,$compose_sql);
    $compose_button = mysqli_fetch_array($compose_results)[0];

?>