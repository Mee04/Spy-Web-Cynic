<?php
require_once 'dbmanageusersdream.php';
if($_GET['action']== 'delete'){
$userid = (int)($_GET['QStrUserID']);
$dream = new Dreams();
$dream->setUserID($userid);
$dream->delDream();
header("Location:manageusersdream.php");
}
?>