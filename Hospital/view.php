<?php
$conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from registration where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $nhifnumber=$record['nhif'];
    $gender=$record['gender'];
    $age=$record['age'];
    $patientnumber=$record['patientno'];
}
?>

<html>
    <head>
        <title>
            view_patients
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" class="form-control" id="id" readOnly="true"  value="<?php echo $id;?>">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" readOnly="true" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label for="name">NHIF:</label>
                    <input type="text" name="nhif" class="form-control" id="nhif" readOnly="true" value="<?php echo $nhif;?>">
                </div>
                
                    
                <div class="form-group">
                    <label for="name">Gender:</label>
                    <input type="text"  class="form-control" name="gender" id="gender" readOnly="true" value="<?php echo $gender;?>">
                    
                </div>
                       
                
                
                <div class="form-group">
                    <label for="name">Age:</label>
                        <input type="text" name="age" class="form-control" id="num" readOnly="true" value="<?php echo $age;?>">
                </div>
                <div class="form-group">
                    <label for="class">Patientno:</label>
                        <input type="text" name="patientno" class="form-control" id="patientno" readOnly="true" value="<?php echo $patientno;?>">
                </div>
               
                
            </form>
        </div>
    </body>

</html>
