<?php
$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
session_start();
    /* if(isset($_SESSION['password']) && $_SESSION['password']===TRUE){

            }else{
                ?>
                <script>window.alert('you must first login');</script>
                <?php
                header("refresh:0;url=index.php");
            }*/
?>
<?php
include('navbar.php')?>
<?php
include('sidebar.php')
?>
<?php
include('content.php')
?>
<?php
include('footer.php')
?>
<?php
include('process_login.php');
$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select*from registration")or die(mysqli_error($conn));
?>
    

        
       