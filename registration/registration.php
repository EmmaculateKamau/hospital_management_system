<html>
    <head>
        <title>
            student registration
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <form name=registration action="process_registration.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="name">Adm no:</label>
                <input type="text" name="adm" class="form-control" id="adm no">
            </div>
            <div class="form-group">
                <label for="name">Gender:</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio"  class="form-check-input" name="radio" value="female">female
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio"  class="form-check-input" name="radio" value="male">male
                        </label>
                    </div>
            </div>
            <!---->>
            <div class="form-group">
                <label for="name">Age:</label>
                <input type="number" name="age" class="form-control" id="num">
            </div>
            <!---->>
            <!---->>
            <div class="form-group">
                <label for="class">Class:</label>
                <select class="form-control" id="class" name="class">
                <option value="form one">form one</option>
                <option value="form two">form two</option>
                <option value="form three">form three</option>
                <option value="form four">form four</option>
                </select>
            </div>
            <!---->>
            <div class="form-group">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </body>
</html>

