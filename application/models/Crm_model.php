<?php
class Crm_model extends CI_Model{
    function cari_user($usename, $password){
        %query = $this->db->query("select * from t1_user where hide='0' and username='$username' and password= '$password'");
		return $query;
    }
}