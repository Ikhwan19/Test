<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class c_transaksi extends CI_Controller {

    public function index()
    {
       $data['konten']="v_transaksi";
       $this->load->view('template',$data); 
    }

}

/* End of file c_transaksi.php */

?>