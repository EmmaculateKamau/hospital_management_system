<?php

if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
    $name=$_POST['name'];
    $nhif=$_POST['nhif'];
    $patientno=$_POST['patientno'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    
    echo $name;
    echo $nhif;
    echo $patientno;
    echo $gender;
    echo $age;

    $insert=mysqli_query($conn,"INSERT INTO registration(name,nhif,patientno,gender,age)VALUES('".$name."','".$nhif."','".
    $patientno."','".$gender."','".$age."')") or die(mysqli_error($conn));

    if($insert){
        echo "<script>window.alert('record inserted')</script>";
        header("refresh:0;url=dashboard.php");
    }else{
        echo "<script>window.alert('record not inserted')</script>";
       header("refresh:0;url=registration.php");
    }

}



?>