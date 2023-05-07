<?php


class UserSession
{


    private $signed_in = false;
    public $UserName_;
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
            $this->UserName_ = $_SESSION['UserName_'] = $user;
            $this->signed_in = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['UserName_']);
        unset($this->UserName_);
        $this->signed_in = false;
    }


    private function check_the_login()
    {
        if (isset($_SESSION['UserName_'])) {
            $this->UserName_ = $_SESSION['UserName_'];
            $this->signed_in = true;
        } else {
            unset($this->UserName_);
            $this->signed_in = false;
        }
    }
}

$session = new UserSession();
