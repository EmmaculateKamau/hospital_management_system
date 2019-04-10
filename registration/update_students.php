<?php
$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
$id=$_GET["id"];
$select_query=mysqli_query($conn,"select * from registration where id=$id")or die(mysqli_error($conn));
foreach($select_query as $emma){
    $id=$emma["id"];
    $name=$emma["name"];
    $adm=$emma["adm"];
    $gender=$emma["gender"];
    $age=$emma["age"];
    $class=$emma["class"];
}
?>
<html>
<head>
    <title>wonderfull morning</title>
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
</head>
<body>
          <div class="container">
                <form name=registration action="" method="POST">
                        <div class="form-group">
                           <label for="id">Id:</label>
                           <input type="text" name="id" class="form-control" id="id" value="<?php echo$id;?>" readOnly="true">
                        </div>
                        <div class="form-group">
                           <label for="name">Name:</label>
                           <input type="text" name="name" class="form-control" id="name" value="<?php echo$name;?>">
                        </div>
                        <div class="form-group">
                           <label for="name">Adm no:</label>
                           <input type="text" name="adm" class="form-control" id="adm no"value="<?php echo$adm;?>">
                        </div>
                        <div class="form-group">
                           <label for="class">Gender:</label>
                           <input type="text" name="gender" class="form-control" id="gender"value="<?php echo$gender;?>">
                        </div>
                        <div class="form-group">
                           <label for="name">Age:</label>
                           <input type="number" name="age" class="form-control" id="num"value="<?php echo$age;?>">
                        </div>
                        <div class="form-group">
                           <label for="class">Class:</label>
                           <input type="text" name="class" class="form-control" id="class"value="<?php echo$class;?>">
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
       $adm=$_POST['adm'];
       $gender=$_POST['gender'];
       $age=$_POST['age'];
       $class=$_POST['class'];
       $update_query=mysqli_query($conn,"update registration set name='$name',adm='$adm',gender='$gender',age='$age',class='$class' where id='$id'")or die(mysqli_error($conn));
       if($update_query){
          echo"<script>window.alert('successful')</script>";
          header("refresh:0;url=table_data.php");
       }else{
         echo"<script>window.alert('failed')</script>";
          header("refresh:0;url=update_students.php");  
       }
    }
?>