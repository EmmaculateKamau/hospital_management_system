<?php
$conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from registration where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $nhif=$record['nhif'];
    $gender=$record['patientno'];
    $age=$record['gender'];
    $patientno=$record['age'];

    
    
   

}
?>

<html>
    <head>
        <title>
            Update_patient
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" class="form-control" id="id" readOnly="true" value="<?php echo $id;?>">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label for="name">NHIF:</label>
                    <input type="text" name="nhif" class="form-control" id="nhif" value="<?php echo $nhif;?>">
                </div>
                
                    
                <div class="form-group">
                    <label for="name">Gender:</label>
                    <input type="text"  class="form-control" name="gender" id="gender" value="<?php echo $gender;?>">
                    
                </div>
                       
                
                
                <div class="form-group">
                    <label for="name">Age:</label>
                        <input type="text" name="age" class="form-control" id="num" value="<?php echo $age;?>">
                </div>
                <div class="form-group">
                    <label for="class">patientno :</label>
                        <input type="text" name="patientno" class="form-control" id="patient" value="<?php echo $patientno;?>">
                </div>
               
                <div class="form-group">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </body>

</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$nhifnumber=$_POST['nhif'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$patientnumber=$_POST['patientno'];
$update_query=mysqli_query($conn," update registration name='$name',nhif='$nhif',gender='$gender',age='$age',
patientno='$patientno' where id='$id'")or die(mysqli_error($conn));
//$update_query=mysqli_query($conn,"update registration set name='$name',adm='$adm',gender='$gender',age='$age',
//class='$class' where id='$id'")or die(mysqli_error($conn));

if($update_query){
    echo "<script>window.alert('update successful')</script>";
    header("refresh:0;url=dashboard.php");
}else{
    echo "<script>window.alert('failed)</script>";
    header("refresh:0;url=update.php");
}
}
?>