<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Perusahaan extends CI_Controller {
 
/*******
     | CRUD Perusahaan
     | controller Perusahaan view, create, update, delete
     | by Arie Iskandar
     ***********/
    public function __construct() {
        parent::__construct();
        $this->load->model('mperusahaan');
        $this->load->helper('form','url');
    }
//class fungsi awal ketika kita panggil controller Perusahaan
    public function index()
    {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Perusahaan'; //judul title
        $data['qperusahaan'] = $this->mperusahaan->get_all_perusahaan(); //model semua Perusahaan
 
        $this->load->view('vperusahaan',$data); //load views vPerusahaan
 
    }
 
    public function form(){
        //ambil variabel URL
        $mau_ke              = $this->uri->segment(3);
        $idu                 = $this->uri->segment(4);
         
 
        //ambil variabel dari form
        $id_pegawai          = addslashes($this->input->post('id_pegawai'));
        $nama                = addslashes($this->input->post('nama'));
        $no_telp             = addslashes($this->input->post('no_telp'));
        $kota                = addslashes($this->input->post('kota'));
        $kelamin             = addslashes($this->input->post('kelamin'));
        $id_posisi           = addslashes($this->input->post('id_posisi'));
        $status              = addslashes($this->input->post('status'));
 
//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah Perusahaan';
            $data['aksi'] = 'aksi_add';
            $this->load->view('vformperusahaan',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->mperusahaan->get_perusahaan_bynama($idu);
            $data['title'] = 'Edit Perusahaan';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('vformperusahaan',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'id_pegawai'=> $id_pegawai,
                'nama'      => $nama,
                'no_telp'   => $no_telp,
                'kota'      => $kota,
                'kelamin'   => $kelamin,
                'id_posisi' => $id_posisi,
                'status'    => $status
            );
            $this->mperusahaan->get_insert($data); //model insert data Perusahaan
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('perusahaan');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'id_pegawai'=> $id_pegawai,
                'nama'      => $nama,
                'no_telp'   => $no_telp,
                'kota'      => $kota,
                'kelamin'   => $kelamin,
                'id_posisi' => $id_posisi,
                'status'    => $status
            );
            $this->mperusahaan->get_update($id,$data); //modal update data Perusahaan
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('perusahaan');
        }
 
    }
    public function detail($id){ //fungsi detail Perusahaan
        $data['title'] = 'Detail Perusahaan'; //judul title
        $data['qPerusahaan'] = $this->mperusahaan->get_perusahaan_bynama($id); //query model Perusahaan sesuai id
 
        $this->load->view('vdetperusahaan',$data); //meload views detail Perusahaan
    }
    public function hapus($gid){ //fungsi hapus Perusahaan sesuai dengan id
 
        $this->mperusahaan->del_perusahaan($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Pegawai berhasil dihapus</div>");
        redirect('perusahaan');
    }
}
 
/* End of file perusahaan.php */
/* Location: ./application/controllers/perusahaan.php */