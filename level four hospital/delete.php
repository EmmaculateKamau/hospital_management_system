<?php
$conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
$id=$_GET['id'];
$delete_query=mysqli_query($conn,"delete from registration where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo "<script>window.alert('record has been deleted')</script>";
    header("refresh:0;url=index.php");
}
?>