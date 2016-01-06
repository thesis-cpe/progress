<?php
 /*หน้าเมนูหลัก*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_customer extends CI_Controller {

    public function index() {
        $this->load->view('report_customer_v');
    }

}
