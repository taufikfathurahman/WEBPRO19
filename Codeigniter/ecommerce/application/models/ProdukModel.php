<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Get semua data dari data table produk pada database
    public function get_all()
    {
        return $this->db->get('produk')->result_array();
    }

    // Get salah satu produk berdasarkan id
    public function get_product($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('produk')->row_array();
    }

    // Memasukkan sebuah data ke table produk pada database
    public function insert_produk($data)
    {
        return $this->db->insert('produk', $data);
    }

    // Mengubah sebuah data pada table produk berdasarkan id
    public function updata_produk($id_produk, $data)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->update('produk', $data);
    }

    // Menghapus sebuah data pada table produk berdasarkan id
    public function delete_produk($id_produk)
    {
        $this-db->where('id_produk', $id_produk);
        return $this->db->delete('produk');
    }
}
