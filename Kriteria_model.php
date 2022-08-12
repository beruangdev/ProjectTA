<?php
class Kriteria_model extends CI_Model{
    
	public function getAll()
	{
		$data = $this->db->query("SELECT * from kriteria_bansos LEFT JOIN kriteria ON kriteria_bansos.id_kriteria = kriteria.id_kriteria");
		return $data->result();
	}

}

