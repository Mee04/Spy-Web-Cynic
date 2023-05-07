<?php
require_once 'DBConnect.php';
require_once 'sessions.php';
require_once 'dbmanageusersdream.php';
require_once 'dbmanageusersaccount.php';


$dbconn = new DBhandler();


$userstats = new Dreams();
//$Getdreamstats = $dreamstats->getAlldreamStats($dbconn);
//$Getusersstats = $Userstats->getAllUserStats($dbconn);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dream-Catcher Dashboard </title>
     
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
       
        <link href="css/adminstyle.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">

<style>
    .icon {
  width: 3rem;
  height: 3rem;
}

.icon i {
  font-size: 2.25rem;
}

.icon-shape {
  display: inline-flex;
  padding: 12px;
  text-align: center;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
}

</style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">          
                 
            
                        <a href="adminDashboard.php">Admin Dashboard</a>
                  
                </div>
                
<!--sidebar-->
<?php
include("sidebar.php");
?>

            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">DREAM-CATCHER INFOs</h1>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                                  <span class="h2 font-weight-bold mb-0">

                                    <?php
                                    
                                 //echo count($Getuserstats);
                                    ?>
                                  </span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                  </div>
                                </div>
                              </div>
                        
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">Dreams</h5>
                                  <span class="h2 font-weight-bold mb-0">
                                   
                                  <?php
                                    
                                    //echo count($GetProductstats);
                                       ?>

                                  </span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                    <i class="fas fa-chart-pie"></i>
                                  </div>
                                </div>
                              </div>
                           
                            </div>
                          </div>
                        </div>
                  
                      </div>
                   
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
