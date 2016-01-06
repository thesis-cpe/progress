<?php
 /*หน้าเมนูหลัก*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailywork extends CI_Controller {

    public function index() {
        $this->load->view('daily_work_v');
    }

}
