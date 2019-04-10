<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","emmaculate")or die(mysqli_error($conn));
    $name=$_POST['name'];
    echo $name;
    

    $insert=mysqli_query($conn,"INSERT INTO emmaculate(name)VALUES('".$name."')") or die(mysqli_error($conn));

    if($insert){
        echo "successful";
    }else{
        echo "failed";
    }
    
    }








?>