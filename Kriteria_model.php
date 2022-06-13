<?php
class Kriteria_model extends CI_Model{
    
	public function getAll()
	{
		$data = $this->db->query("SELECT * from kriteria");
		return $data->result();
	}
}
