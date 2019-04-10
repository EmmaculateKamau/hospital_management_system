<?php
include('process_login.php');
session_destroy();
echo "Logout.............";
header('refresh:2;url=index.php');
?>