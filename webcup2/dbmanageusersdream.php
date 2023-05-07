<?php

require_once 'DBConnect.php';

class Dreams{

    private $dream;
    private $userid;
   
  
    
    public function setuserid($userid){
        $this-> userid=$userid;
    }
    public function setDream($dream){
        $this->dream=$dream;
    }
  

    public function addDream(){
      $dbconn= new DBHandler();
      //prepared statement
      $dbconn -> query('INSERT INTO tblregistration(dream) VALUES(:dr)');
      //call bind method in DBHandlerclass
      $dbconn->bind(':dr', $this -> dream);
      //execute prepared statement
      $dbconn->execute();
    }


    public function delDream(){
      $dbconn= new DBHandler();
      $dbconn->query('DELETE FROM tblregistration where userid = :uid');
      $dbconn->bind(':uid', $this -> userid);
      $dbconn->execute();
  }

    public function retrieveDream(){
      $dbconn = new DBHandler();
      $dbconn -> query('SELECT * FROM tblregistration WHERE userid= (:uid)');
      $dbconn->bind(':uid', $this -> userid);
      return $row = $dbconn -> resultset();
    }

    public function updateDream(){
      $database = new DBHandler();
      $database->query('UPDATE tblregistration SET dream = (:dr) WHERE userid = (:uid)');
      $database->bind(':dr', $this->dream);
      $database->bind(':uid', $this->userid);

      $database->execute();
    }

    public function getAlldreamStats(){

      $dbconn = new DBHandler();
      $dbconn->query('SELECT *  FROM `tblregistration`;');
      return $row = $dbconn->resultset();

  }

    public function getAllDream($dbconn){
        $dbconn->query('SELECT * FROM tblregistration');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    }
    
    
    
}
?>