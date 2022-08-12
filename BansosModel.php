<?php
class BansosModel extends CI_Model {

    public function getBansos()
	{
		$data = $this->db->query("SELECT * from bansos");
		return $data->result();
	}

	public function bansos(){
		$query = $this->db->bansos('bansos');
		return $query->result_array();
	}

	function add_bansos($data) {
		$this->db->insert('bansos', $data);
		return TRUE;
	}

	// function ubah($data){
	// 	$this->db->where('id_bansos',$id_bansos);
    // 	$this->db->update('bansos', $data);
    // 	return TRUE;
	// }

}