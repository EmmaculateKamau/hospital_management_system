<html>
    <head>
          <title>Admin Login</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
         <div class="container">
            <div class="row 1" style="height:200px;"></div>
            <div class="row 2">
                 <div class="col-sm-4"></div>
                 <div class="col-sm-4">
                     <form name="login-form" action="process_login.php" methode="POST">
                         <h3>login</h3>
                         <div class="form=group">
                              <input type="text" name="username" class="form-control" placeholder="username"><br/><br/>
                              <input type="password" name="password" class="form-control" placeholder="password"><br/><br/>
                              <input type="submit" name="submit" class="btn-primary" style="width:300px;" value="login">
                         </div>
                     </form>
                 </div>
                 <div class="col-sm-4"></div>
            </div>
         </div>
    </body>
</html>