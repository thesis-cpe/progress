<?php
 /*หน้าเมนูหลัก*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_employee extends CI_Controller {

    public function index() {
        $this->load->view('report_employee_v');
    }

}
