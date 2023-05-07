<?php
require_once 'DBConnect.php';
require_once 'dbmanageusersdream.php';


$dbconn = new DBhandler();

$dream = new Dreams();
$listdream = $dream->getAllDream($dbconn);


?>

<?php
if (isset($_POST["btnsave"])) {
  $Product->setUserID($_POST['type']);
  $Product->setUsername($_POST['cat']);
  $Product->setDream($_POST['pdt']);
  $Product->setEmail($_POST['pdtname']);
  
  //Image Folder
  //$uploaddir = 'images/';

  //Upload File
  //$uploadfile = $uploaddir . basename($_FILES['profilepicture']['name']);

  //move uploaded file
  //move_uploaded_file($_FILES['profilepicture']['tmp_name'], $uploadfile);
  //$Product->setimage($_FILES['profilepicture']['name']);
  //$Product->addProduct();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin Dashboard</title>

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


        <div class="jumbotron ">

          <h1 class="display-4">Manage Dreams</h1>
          <form method="post" enctype="multipart/form-data">

            <div class="form-group">

            <div class="form-group">
              <label for="udd">Users Dream Description</label>
              <input type="udd" class="form-control" name="udd" placeholder="Enter dream's description">
            </div>           
          


            <br />
            <button type="submit" name="btnsave" class="btn btn-primary">Submit</button>
          </form>

        </div>

        <div class="container">


          <!-- Displaying records in table -->
          <table class="table table-striped">
            <thead>
              <tr>
             
                <th scope="col">UserID</th>
                <th scope="col"> Description </th>        
                       

              </tr>
            </thead>

            <tbody>
              <?php foreach ($listdream as $row) { ?>
                <tr>
                  <td><?php echo $row['userid']; ?></td>
                  <td><?php echo $row['dream']; ?></td>
                  


                  <?php
                  echo "<td><a href='UpdateDream.php?action=update&QStrUserID=" . $row['userid'] . "'>Update </a>│ <a href='DeleteDream.php?action=delete&QStrUserID=" . $row['userid'] . "'>Delete</a></td>";
                  ?>
                </tr>
              <?php
              }
              ?>
            </tbody>


          </table>
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