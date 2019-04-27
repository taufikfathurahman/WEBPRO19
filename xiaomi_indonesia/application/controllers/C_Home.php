<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_COntroller
{
    public function index()
    {
        $cookie = $this->input->cookie('logged');
        $this->load->view('template/header');
        $this->load->view('V_Home');
        $this->load->view('template/footer');
    }


    public function home_logged()
    {
        $cookie = $this->input->cookie('logged');
        $this->load->view('template/header_logged');
        $this->load->view('V_Home');
        $this->load->view('template/footer');
    }
}
