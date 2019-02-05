<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelian extends CI_Model {

    public function get_pembelian(){
        $data_pembelian;
    }
    public funtion insert_pembelian(){
        $data_pembelian=array(
            'username' =>$this->input->post('username');
        )
    }

}
?>