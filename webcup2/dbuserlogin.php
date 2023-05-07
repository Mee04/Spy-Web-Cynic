<?php
require_once 'DBConnect.php';

class UserLogin{
    private $email;
    private $Password;

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    

    public function retrieveUser()
    {
        $dbconn = new DBHandler();
        $dbconn->query('SELECT * FROM tblregistration WHERE email = :email and Password =:pwd');
        $dbconn->bind(':email', $this->email);
        $dbconn->bind(':pwd', $this->Password);
        $row = $dbconn->resultset();
        return  (!empty($row) && $row[0]["block"] != "yes") ? true : false;
    }

}

