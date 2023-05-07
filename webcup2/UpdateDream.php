<?php
session_start();
require_once 'dbmanageusersdream.php';
if (isset($_GET['QStrUserID'])){
$_SESSION['userid'] = (int)($_GET['QStrUserID']);
$dream = new Dreams();
$dream->setUserID($_SESSION['userid'] );
$row = $dream -> retrieveDream();
}


if(isset($_POST['btnUpdate'])){
$dream = new Dreams();
$dream->setDream($_POST['dream']);
$dream->setUserID($_GET['QStrUserID']);
$dream->updateDream();
header('Location:manageusersdream.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form method="POST" >
<label for="dream">Description</label><br>
<?php 
echo "<input type='dream' name='dreamdescription' value='".$row[0]['dream']."'><br>"; 
?>
<?php echo "<input type='submit' name='btnUpdate' value='Update record' ><br>";
?></form>
</body>
</html>