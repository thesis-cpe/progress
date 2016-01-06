<?php
 /*หน้าเมนูหลัก*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_panel extends CI_Controller {

    public function index() {
        $this->load->view('main_panel_v');
    }

}
