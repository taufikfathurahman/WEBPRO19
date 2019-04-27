<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller
{
    public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('User');
  	}

    public function Register()
    {
        if($_POST['password'] == $_POST['re_pass'])
        {
            if($this->User->Register())
            {
                redirect('C_Login/login');
            } else
            {
                redirect('C_Login/Register');
            }
        }
        else
        {
            redirect('C_Login/Register');
        }
    }

    public function login()
    {
        $user = $this->User->findUser();
        if($user != null)
        {
            set_cookie('logged', $user[0]['email'], '3600');
            redirect('C_Home/home_logged');
        }
        else
        {
            redirect('C_Login/login');
        }
    }

    public function Logout() {
    $cookie = $this->input->cookie('logged');
    if(isset($cookie)) {
            delete_cookie('logged');
            redirect('C_Home');
    } else {
            session_destroy();
            redirect('C_Home');
    }
}
}
