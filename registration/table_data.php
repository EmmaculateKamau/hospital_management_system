<?php
include('process_login.php');
$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select*from registration")or die(mysqli_error($conn));
?>

<html>
    <head>
        <title>
            database records
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>

    <body>
        <div class="container">
            <div class="row"></div>
            <div class="row">
                <div class="col-sm-2"><?php echo $_SESSION['username'];echo $_SESSION['password'];?>
                   <a href="logout.php" class="btn-infor">logout</a>
                </div>
                <div class="col-sm-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">adm</th>
                                <th scope="col">gender</th>
                                <th scope="col">age</th>
                                <th scope="col">class</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($db_records as $record){?>
                            <tr>
                            <td><?php echo $record['id'];?></td>
                            <td><?php echo $record['name'];?></td>
                            <td><?php echo $record['adm'];?></td>
                            <td><?php echo $record['gender'];?></td>
                            <td><?php echo $record['age'];?></td>
                            <td><?php echo $record['class'];?></td>


                            <td>
                               <a href="view_students.php?id=<?php echo $record["id"];?>"class="btn btn-primary">view</a>
                               <a href="update_students.php?id=<?php echo $record["id"];?>"class="btn btn-infor">update</a>
                               <a href="delete_students.php?id=<?php echo $record["id"];?>"class="btn btn-danger">delete</a>
                            </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>

                </div>
                <div class="col-sm-2"></div>
            </div>

        </div>

    </body>
</html>