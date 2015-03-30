<?php

class m_user extends CI_Model{
	function get_user(){
		$sql = "SELECT * FROM tb_user";
		$query = $this->db->query($sql);
		
        if ($query->num_rows() > 0) {
            $g_result = $query->row_array();
            $query->free_result();
            return $g_result;
        } else {
            return array();
        }
	}
    function can_log_in($username, $password){
        $this->db->select('*');
        //membuat fungsi where didalam database dengan input username
        $this->db->where('email_user', $username);
        //$this->db->where('username', $this->input->post('username'));
        //membuat fungsi where didalam database dengan input password yang sudah dienkripsi
        $this->db->where('password',$password);
        //$this->db->where('password', md5($this->input->post('password')));
        //$sql ="SELECT * FROM admin WHERE username=? AND password=?";
        //$query = $this->db->query($sql, $param);
        //eksekusi query ditabel admin
        $query = $this->db->get('tb_user');
        //$sql = " SELECT * FROM tb_user WHERE email_user=? AND password=? ";
        //$query = $this->db->query($sql, $username, $password);
        if ($query->num_rows()>0) {
            $g_result = $query->row_array();
            $query->free_result();
            return $g_result;
        } else {
            return array();
        }


    }
    function last_login($param){
        $sql = "UPDATE tb_user SET last_login=? WHERE id_user=?";
        return $this->db->query($sql, $param);

    }
    function add_post($param){
        
        $sql ="INSERT INTO article (judul, image, isi, id_category, id_user, date_input) VALUES (?,?,?,?,?,?)";
        return $this->db->query($sql, $param);
    }
    function input_post($param){
        
        $sql ="INSERT INTO coba (judul, isi) VALUES (?,?)";
        return $this->db->query($sql, $param);
    }
}