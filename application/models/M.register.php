<?php
class M_register extends CI_Model{
	function get_register(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}
	function simpan_register($nama,$username,$password,$level){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_nama,user_username,user_password,user_level,user_status) VALUES ('$nama','$username',md5('$password'),'$level','1')");
		return $hsl;
	}
}