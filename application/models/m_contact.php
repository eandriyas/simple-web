
<?php

class m_contact extends CI_Model{
	
	function input_contact($params){
		$sql ="INSERT INTO contact (name_contact, email_contact, message) VALUES (?,?,?)";
		return $this->db->query($sql, $params);
	}
}