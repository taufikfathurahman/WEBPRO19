<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
    }

    public function index()
    {
        $content['title'] = 'Halaman Produk';
        $content['main_view'] = 'produk/lihat_produk';
        $content['page'] = 'produk';
        $content['data_product'] = $this->ProdukModel->get_all();
        $this->load->view('template/template', $content);
    }

    public function form_tambah()
    {
        $content['title'] = 'Form Tambah Produk';
        $content['main_view'] = 'produk/tambah_produk';
        $content['page'] = '';
        $this->load->view('template/template', $content);
    }

    public function tambah_produk()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
        );
        $cek = $this->ProdukModel->insert_produk($data);
        if($cek)
        {
            $this->session->set_flashdata('info', 'Produk Berhasil Ditambahkan');
        }
        else
        {
            $this->session->set_flashdata('info', 'Produk Gagal Ditambahkan');
        }
        redirect('produk');
    }

    public function form_ubah($id_produk)
    {
        $content['title'] = 'Form Ubah Produk';
        $content['main_view'] = 'produk/ubah_produk';
        $content['page'] = '';
        $content['produk'] = $this->ProdukModel->get_produk($id_produk);
        $this->load->view('template/template', $content);
    }

    public function ubah_produk($id_produk)
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
        );
        $cek = $this->ProdukModel->update_produk($id_produk, $data);
        if($cek)
        {
            $this->session->set_flashdata('info', 'Produk Berhasil Diubah');
        }
        else
        {
            $this->session->set_flashdata('info', 'Produk Gagal DIubah');
        }
        redirect('produk');
    }

    public function hapus_produk($id_produk)
    {
        $cek = $this->ProdukModel->delete_produk($id_produk);
        if($cek)
        {
            $this->session->set_flashdata('info', 'Produk Berhasil Dihapus');
        }
        else
        {
            $this->session->set_flashdata('info', 'Produk Gagal Dihapus');
        }
        redirect('produk');
    }
}