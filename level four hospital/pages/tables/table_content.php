<?php

$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
include('content.php')
?>
<?php
include('process_login.php');
$conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select*from registration")or die(mysqli_error($conn));
?>
    
