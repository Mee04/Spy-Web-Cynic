<?php
require_once 'DBConnect.php';

class Login{
    private $UserName;
    private $Password;

    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function retrieveUser()
    {
        $dbconn = new DBHandler();
        $dbconn->query('SELECT * FROM tbladmin WHERE UserName = :usn and Password =:pass');
        $dbconn->bind(':usn', $this->UserName);
        $dbconn->bind(':pass', $this->Password);
        $row = $dbconn->resultset();
        return  !empty($row) ? true : false;
    }

}
