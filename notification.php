<?php

require_once('./controller/session.php');

if(isset($_POST['view'])){

if($_POST["view"] != '')
{
    $update_query = "UPDATE cu_intra_notificaciones SET Estado = 1 WHERE Estado = 0 AND Receptor = $login_id";
    mysqli_query($conn, $update_query);
}

$query = "SELECT u.Usuario,
CASE 
  WHEN CHAR_LENGTH(n.Asunto) > 15 THEN CONCAT(SUBSTRING(n.Asunto, 1, 15),'...')
  ELSE n.Asunto
END as Asunto,
CASE 
  WHEN CHAR_LENGTH(n.Mensaje) > 25 THEN CONCAT(SUBSTRING(n.Mensaje, 1, 25),'...')
  ELSE n.Mensaje
END as Mensaje,
n.Fecha 
FROM cu_intra_notificaciones n
INNER JOIN cu_logins u
ON n.Emisor = u.Id
WHERE n.Receptor = $login_id
ORDER BY n.Id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
	<a class="dropdown-item" href="./inbox.php?id='.$login_id.'">
		<strong>'.$row["Asunto"].'</strong>
		<br>
		<small>'.$row["Mensaje"].'</small>
		<h6 class="dropdown-header m-0 p-0"><small>Mensaje de '.$row["Usuario"].' el '.date("d/m/Y",strtotime($row["Fecha"])).'</small></h6>
		<div class="dropdown-divider"></div>
	</a>
   ';

 }
}
else{
     $output .= '
     <a class="dropdown-item" href="#">0 notificaciones</a>';
}

$status_query = "SELECT * FROM cu_intra_notificaciones WHERE Estado = 0 AND Receptor = $login_id";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>