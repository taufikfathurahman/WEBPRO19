<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller
{
    public function index()
    {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successlogin']))
        {
            $this->loginPage();
        }
        else
        {
            $this->load->view('V_Masuk');
        }
    }
    public function register()
    {
         $this->load->view('V_Daftar');
    }

    public function login()
    {
        $this->load->view('V_Masuk');
    }
    public function loginPage()
    {
         $cookie = $this->input->cookie('logged');
         $this->load->view('template/header_logged');
         $this->load->view('V_Home');
         $this->load->view('template/footer');
    }
}
