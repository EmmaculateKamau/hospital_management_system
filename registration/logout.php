<?php
   include('process_login.php');
   session_destroy();
   echo"logout.....";
   header('refresh:2;url=index.php'); 
?>