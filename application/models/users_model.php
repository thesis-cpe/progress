﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function _checkUser($username, $password) { //ตรวจสอบชื่อผู้ใช้งานและรหัสผ่าน
        $result = $this->db->where('em_number', $username)
                ->where('em_password', md5($password))
                ->count_all_results('employee');
        return $result > 0 ? TRUE : FALSE;
    }

}
