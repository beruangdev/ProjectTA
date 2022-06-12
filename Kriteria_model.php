<?php
class Kriteria_model extends CI_Model{
    
	public function getAll()
	{
		$this->db->get('kriteria')->result();
	}
}