<?php

require_once 'DBConnect.php';

class Users{

    private $dream;
    private $userid;
    private $username;
    private $email;
    private $Password;
    private $date;
   
  
    
    public function setUserid($userid){
        $this-> userid=$userid;
    }
    public function setDream($dream){
        $this->dream=$dream;
    }
    public function setUsername($username){
        $this-> username=$username;
    }
    public function setPassword($Password){
        $this->Password=$Password;
    }
    public function setDate($date){
        $this-> date=$date;
    }
    public function setEmail($email){
        $this->email=$email;
    }
  

    public function addUser(){
      $dbconn= new DBHandler();
      //prepared statement
      $dbconn -> query('INSERT INTO tblregistration(username, dream,date,email,userid,Password) VALUES(:un, :dr, :da, :ue, :uid, :up)');
      //call bind method in DBHandlerclass
      $dbconn->bind(':dr', $this -> dream);
      $dbconn->bind(':un', $this -> username);
      $dbconn->bind(':da', $this -> date);
      $dbconn->bind(':ue', $this -> email);
      $dbconn->bind(':up', $this -> Password);
      $dbconn->bind(':uid', $this -> userid);
      //execute prepared statement
      $dbconn->execute();
    }


    public function delUser(){
      $dbconn= new DBHandler();
      $dbconn->query('DELETE FROM tblregistration where userid = :uid');
      $dbconn->bind(':uid', $this -> userid);
      $dbconn->execute();
  }

    public function retrieveUser(){
      $dbconn = new DBHandler();
      $dbconn -> query('SELECT * FROM tblregistration WHERE userid= (:uid)');
      $dbconn->bind(':uid', $this -> userid);
      return $row = $dbconn -> resultset();
    }

    public function updateUser(){
      $database = new DBHandler();
      $database->query('UPDATE tblregistration WHERE userid = (:uid)');
      $database->bind(':uid', $this->userid);

      $database->execute();
    }

    public function getAllUserStats(){

      $dbconn = new DBHandler();
      $dbconn->query('SELECT *  FROM `tblregistration`;');
      return $row = $dbconn->resultset();

  }
  public function unblockUser()
  {
      $dbconn = new DBHandler();
      $dbconn->query('UPDATE `tblregistration` SET `block` = :block WHERE userid = :UID');
      $dbconn->bind(':block', "no");

      $dbconn->bind(':UID', $this -> userid);

      $dbconn->execute();
  }

    public function getAllUser($dbconn){
        $dbconn->query('SELECT * FROM tblregistration');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    }
    
    
    
}
?>