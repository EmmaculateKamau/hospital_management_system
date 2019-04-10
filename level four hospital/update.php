<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                       
                    </div>
                    <div class="col-md-8">
                    <div class="card">
                            <div class="header">
                                <h4 class="title">Add new patient</h4>
                            </div>
                            <div class="content">
                                <form action="" method="POST">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NHIF</label>
                                                <input type="text" class="form-control" name="nhif" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>PatientNo</label>
                                                <input type="text" class="form-control" name="patientno"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" name="gender"  >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" class="form-control" name="age"  >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Submit">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </div>
        </div>
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
        ?>
        <script>
        window.alert('success');
        window.location.href='content.php';
        </script>
        <?php
    }else{
        ?>
        <script>
        window.alert('failed');
        window.location.href='Process_login.php';
        </script>
        <?php
    }


}
?>
        
