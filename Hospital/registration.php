<html>
    <head>
        <title>
           Patient registration
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <form name="registration" action="process_registration.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="name">NHIF :</label>
                <input type="text" name="nhif" class="form-control" id="nhif">
            </div>
            <div class="form-group">
                <label for="name">Gender:</label>
                <input type="text" name="gender" class="form-control" id="gender">  
            </div>
            
            <div class="form-group">
                <label for="name">Age:</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            
            <div class="form-group">
                <label for="class">Patientno:</label>
                <input type="number" name="patientno" class="form-control" id="patientno">
            </div>
            
            <div class="form-group">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </body>
</html>

