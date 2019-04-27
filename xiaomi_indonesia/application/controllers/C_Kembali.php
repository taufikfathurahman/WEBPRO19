<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kembali extends CI_COntroller
{
    public function index()
    {
        $cookie = $this->input->cookie('logged');
        $this->load->view('template/header_logged');
        $this->load->view('V_Kembali');
        $this->load->view('template/footer');
    }
}
