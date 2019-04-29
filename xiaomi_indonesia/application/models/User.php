<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
    public function Register() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "negara" => ($this->input->post('negara'))
        );

        if($this->isExist($data['email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "email" => $data['email'],
                "password" => $data['password']
            ));
            return true;
        }
    }

    public function isExist($email) {
        $this->db->where("email",$email);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => ($this->input->post('password'))
        );
        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }

    public function getImage() {
        return $this->db->get('barang')->result_array();
    }
}
