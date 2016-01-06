<?php
 /*หน้าเมนูหลัก*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_data extends CI_Controller {

    public function index() {
        $this->load->view('main_data_v');
    }

}
