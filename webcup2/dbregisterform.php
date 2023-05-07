<?php
require_once 'DBConnect.php';

class User{

    private $username;
    private $userid;
    private $dream;
    private $date;
    private $email;
    private $password;
    
    public function setUsername($username){
        $this-> username=$username;
    }
    public function setDream($dream){
        $this->dream=$dream;
    }
    public function setDate($date){
        $this->date=$date;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
      $this->password=$password;
  }    

    public function addUser(){
      $dbconn= new DBHandler();
      //prepared statement
      $dbconn -> query('INSERT INTO tblregistration(username, password, dream, date, email) VALUES(:un, :pwd, :dr, :da,:ue)');
      //call bind method in DBHandlerclass
      $dbconn->bind(':un', $this -> username);
      $dbconn->bind(':dr', $this -> dream);
      $dbconn->bind(':da', $this -> date);
      $dbconn->bind(':ue', $this -> email);
      $dbconn->bind(':pwd', $this -> password);
     
        //execute prepared statement
      $dbconn->execute();
    }

    public function retrieveUser(){
      $dbconn = new DBHandler();
      $dbconn -> query('SELECT * FROM tblregistration WHERE userid= (:UID)');
      $dbconn->bind(':UID', $this -> userid);
      return $row = $dbconn -> resultset();
    }  
    
    
}
?>