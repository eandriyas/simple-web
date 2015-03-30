<?php

class m_category extends CI_Model{
	function get_category(){
		$sql ="SELECT * FROM category where id_category!=4";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function get_category_all(){
		$sql ="SELECT * FROM category";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function get_category_by_id($id){
		$sql ="SELECT * FROM category where id_category=?";
		$query = $this->db->query($sql,$id);
		if($query->num_rows() > 0){
			$q_result = $query->row_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}
	}
	function get_article_category($id){
		$sql = "SELECT * FROM article WHERE id_category=? ORDER BY id_article";
		$query = $this->db->query($sql, $id);
		if($query->num_rows()>0){
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		}else{
			return array();
		}

	}
}