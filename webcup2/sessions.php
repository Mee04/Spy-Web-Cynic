<?php


class Session
{


    private $signed_in = false;
    public $UserName;
    public $message;


    function __construct()
    {
        session_start();
        $this->check_the_login();
     
    }

  

    public function is_signed_in()
    {
        return $this->signed_in;
    }

    public function login($user)
    {
        if ($user) {
            $this->UserName = $_SESSION['UserName'] = $user;
            $this->signed_in = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['UserName']);
        unset($this->UserName);
        $this->signed_in = false;
    }


    private function check_the_login()
    {
        if (isset($_SESSION['UserName'])) {
            $this->UserName = $_SESSION['UserName'];
            $this->signed_in = true;
        } else {
            unset($this->UserName);
            $this->signed_in = false;
        }
    }
}

$session = new Session();
