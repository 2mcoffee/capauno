<?php

   include("./config/open-db.php");
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
            
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $login_sql = "SELECT Id FROM cu_logins WHERE Usuario = '".$myusername."' AND Clave = md5('".$mypassword."') AND Activo = 1;";
      $login_sql_results = mysqli_query($conn,$login_sql);
      
      $count = mysqli_num_rows($login_sql_results);
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         $error = "Usuario y/o clave invalidos.";
      }
   }

?>