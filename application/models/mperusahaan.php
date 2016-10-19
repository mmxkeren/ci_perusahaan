<?php
class Mperusahaan extends CI_Model {
 
    var $tabel_pegawai = 'pegawai'; //variabel tabel
    var $tabel_kota = 'kota'; //variabel kota
    var $tabel_kelamin = 'kelamin'; //variabel kelamin
    var $tabel_posisi = 'posisi'; //variabel posisi
 
    function __construct() {
        parent::__construct();
    }
    function get_all_perusahaan() {
        $this->db->from($this->tabel_pegawai);
        $query = $this->db->get();
 
        //cek apakah ada data pegawai
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    function get_perusahaan_bynama($id) {
        $this->db->from($this->tabel_pegawai);
        $this->db->where('id_pegawai', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->tabel_pegawai, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('id_pegawai', $id);
        $this->db->update($this->tabel_pegawai, $data);
 
        return TRUE;
    }
    function del_perusahaan($id) {
        $this->db->where('id_pegawai', $id);
        $this->db->delete($this->tabel_pegawai);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }

    function count_pegawai(){
        $query = $this->db->get($this->tabel)->num_rows();
        return $query;
    }

    function count_pegawai_search($orlike) {
        $this->db->or_like($orlike);
        $query = $this->db->get($this->tabel);
        return $query->num_rows();
    }

}
?>