<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Level Four Hospital</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
    
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"></p>
                 
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">All Patients</span>
            </a>
          </li>
          

          
          
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Patients</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          
         
          
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Patients</h4>
                  <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>id</th>
                                    	<th>name</th>
                                    	<th>nhif</th>
                                    	<th>patientno</th>
                                    	<th>gender</th>
                                        <th>age</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($db_records as $record){?>
                                        <tr>
                                            <td><?php echo $record['id'];?></td>
                                            <td><?php echo $record['name'];?></td>
                                            <td><?php echo $record['nhif'];?></td>
                                            <td><?php echo $record['patientno'];?></td>
                                            <td><?php echo $record['gender'];?></td>
                                            <td><?php echo $record['age'];?></td>
                                            
                                            <td>
                                                <a href="view_students.php?id=<?php echo $record['id']; ?>" class="btn btn-primary">view</a>
                                                <a href="update_students.php?id=<?php echo $record['id']; ?>" class="btn btn-info">update</a>
                                                <a href="deletestudents.php?id=<?php echo $record['id']; ?>" class="btn btn-danger">delete</a>
                                            </td>
                                        
                                        </tr>
                                    <?php }?>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
            
                    
          </div>
                                           
                                        

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>