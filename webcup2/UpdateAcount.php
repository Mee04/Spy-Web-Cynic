<?php
session_start();
require_once 'dbmanageusersaccount.php';
if (isset($_GET['QStrUserid'])){
$_SESSION['userid'] = (int)($_GET['QStrUserid']);
$Users = new Users();
$Users->setUserID($_SESSION['userid'] );
$row = $Users-> retrieveUser();
}


if(isset($_POST['btnUpdate'])){
$Users = new Users();

$User->setEmail($_POST['email']);
$User->setPassword($_POST['Password']);
$User->setDream($_POST['dream']);
$User->setDate($_POST['date']);
$User->setUserID($_GET['QStruserid']);
$User->setUsername($_POST['username']);


$User->updateUser();
header('Location:manageusersaccount.php');
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
<label for="un">Username</label><br>
<?php 
echo "<input type='username' name='username' value='".$row[0]['username']."'><br>"; 
?>
<label for="pwd">Password</label><br>
<?php 
echo "<input type='Password' name='Password' value='".$row[0]['Password']."'><br>"; 
?>
<label for="ue">Email</label><br>
<?php 
echo "<input type='email' name='email' value='".$row[0]['email']."'><br>"; 
?>
<label for="date">Date</label><br>
<?php 
echo "<input type='date' name='date' value='".$row[0]['date']."'><br>"; 
?>
<label for="dr">Dream</label><br>
<?php 
echo "<input type='dream' name='dream' value='".$row[0]['dream']."'><br>"; 
?>
<br>
<?php echo "<input type='submit' name='btnUpdate' value='Update record' ><br>";
?>
</form>
</body>
</html>