<?php
$conn=mysqli_connect("localhost","root","","hospital")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from registration where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $nhif=$record['nhif'];
    $patientno=$record['patientno'];
    $gender=$record['gender'];
    $age=$record['age'];
}
?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Patient</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Id</label>
                                                <input type="text" class="form-control"  value="<?php echo $id;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="<?php echo $name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">nhif</label>
                                                <input type="text" class="form-control" value="<?php echo $nhif;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>patientno</label>
                                                <input type="text" class="form-control"  value="<?php echo $patientno;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>gender</label>
                                                <input type="text" class="form-control"  value="<?php echo $gender;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>age</label>
                                                <input type="text" class="form-control"  value="<?php echo $age;?>">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    

                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                
                                
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
