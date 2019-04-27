<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_IsiKeranjang extends CI_COntroller
{
    public function index()
    {
        $cookie = $this->input->cookie('logged');
        $this->load->view('template/header_keranjang');
        $this->load->view('V_IsiKeranjang');
        $this->load->view('template/footer');
    }
}