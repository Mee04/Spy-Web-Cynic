<?php
require_once 'dbmanageusersaccount.php';
if($_GET['action']== 'delete'){
$userid = (int)($_GET['QStrUserid']);
$Users = new Users();
$Users->setUserID($userid);
$Users->delUser();
header("Location:manageusersaccount.php");
} else if($_GET['action']== 'unblock'){
    $userid = (int)($_GET['QStrUserid']);
    $Users = new Users();
    $Users->setUserID($userid);
    $Users->unblockUser();
    header("Location:manageusersaccount.php");
    }
?>