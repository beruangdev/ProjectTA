<?php
class Alternatif_model extends CI_Model{
    
    public function All() {
        $data = $this->db->query("SELECT a.id_calon_penerima, a.nama_calon_penerima, a.alamat, a.no_HP, b.id_kriteria, b.data
        FROM alternatif AS a, data_penerima_bansos AS b
        WHERE a.id_calon_penerima=b.id_calon_penerima");
        return $data->result();
    }
}

// Join 2 table
// SELECT * from data_penerima_bansos LEFT JOIN alternatif ON data_penerima_bansos.id_penerima_bansos = alternatif.id_calon_penerima
// SELECT * FROM data_penerima_bansos LEFT JOIN alternatif ON data_penerima_bansos.id_penerima_bansos = alternatif.id_calon_penerima 
//         WHERE data_penerima_bansos.id_bansos = 'BANSOS0001'