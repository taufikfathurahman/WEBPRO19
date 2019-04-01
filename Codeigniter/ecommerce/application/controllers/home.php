<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
    }

    public function index()
    {
        $content['title'] = 'Halaman Utama';
        $content['main_view'] = 'index';
        $content['page'] = 'home';
        $content['data_product'] = $this->HomeModel->get_data('produk');
        $this->load->view('template/template', $content);
    }
}
