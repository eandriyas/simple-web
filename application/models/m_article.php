<?php

class m_article extends CI_Model{
	
	function get_article(){
		$sql ="SELECT * FROM article LIMIT 0,4";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function get_article_with_category(){
		$sql ="SELECT judul, id_article FROM article WHERE id_category!=4";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}

	function get_article_by_category($id){
		$sql = "SELECT * FROM article WHERE id_category=? ORDER BY id_article DESC LIMIT 0,2";
		$query = $this->db->query($sql, $id);
		if($query->num_rows()>0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}

	}

	function get_article_by_id($id){
		$sql = "SELECT * FROM article WHERE id_article=?";
		$query = $this->db->query($sql, $id);
		if($query->num_rows()>0){
			$q_result = $query->row_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function get__list_article(){
		$sql ="SELECT article.`id_article`, article.`judul`, article.`isi`, article.`date_input`, category.`category`, tb_user.`nama_user` 
FROM article 
INNER JOIN category ON article.`id_category` = category.`id_category`
INNER JOIN tb_user ON article.`id_user` = tb_user.`id_user`
GROUP BY article.`id_article`";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function del_article($id){
        //perintah sql untuk hapus barang
        $sql = "DELETE FROM article WHERE id_article = ? ";
        //eksekusi untuk perintah sql
        $query = $this->db->query($sql, $id);
        //cek apakah perintah sql berhasil dijalankan atau tidak
        if($query==true){
            echo "berhasil delete";
        } else echo "gagal delete";
    }
	function edit_article($id){
        //perintah sql untuk hapus barang
        $sql = "UPDATE article SET judul=?, image=?, isi=?, id_category=?, id_user=?, date_input=? WHERE id_article = ?";
        //eksekusi untuk perintah sql
        $query = $this->db->query($sql, $id);
    }
}