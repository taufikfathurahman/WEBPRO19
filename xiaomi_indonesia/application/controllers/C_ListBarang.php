<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ListBarang extends CI_Controller
{
    public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('User');
  	}

    public function index()
    {
        $this->listBarangPage();
    }
    public function listBarangPage() 
    {
        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
        $this->load->view('template/header_logged');
        $this->load->view('V_ListBarang', $data);
        $this->load->view('template/footer');
    }
}
