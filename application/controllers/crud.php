<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class crud extends CI_controller{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data['content'] = $this ->db->get('barang');
        $this ->load->view('crud/index',$data);
        $data['content'] = $this ->db->get('siswa');
        $this ->load->view('crud/index1',$data);
        $data['content'] = $this ->db->get('kartu');
        $this ->load->view('crud/index2',$data);
    }
    public function add(){
        $this->load->view('pages/home');
    }
    public function action_add(){
        $data = array (
            'kode_Barang' => $this->input->post('kode_Barang'),
            'Nama_Barang' => $this->input->post('Nama_Barang'),
            'Jumlah_barang' => $this->input->post('Jumlah_barang'),
        );
        $this->db->insert('barang',$data);
        redirect('index.php/crud','refresh');
    }
    
    public function update($id=NULL){
        $this->db->where('kode_Barang',$id);
        $data['content'] = $this ->db->get('barang');
        $this ->load->view('pages/home',$data);
    }
    public function action_update($id=""){
        $data = array (
            'kode_Barang' => $this->input->post('kode_Barang'),
            'Nama_Barang' => $this->input->post('Nama_Barang'),
            'Jumlah_barang' => $this->input->post('Jumlah_barang'),
        );
        $this->db->where('kode_Barang',$id);
        $this->db->update('barang',$data);
        redirect('index.php/crud','refresh');
    }
    public function delete($id=NULL){
        $this->db->where('kode_Barang',$id);
        $this->db->delete('barang');
        redirect('index.php/crud','refresh');
    }
    public function action_add0(){
        $data = array (
            'NIS' => $this->input->post('NIS'),
            'Nama' => $this->input->post('Nama'),
            'Kelas' => $this->input->post('Kelas'),
            'Jurusan' => $this->input->post('Jurusan'),
        );
        $this->db->insert('siswa',$data);
        redirect('index.php/crud','refresh');
    }
    public function action_add1(){
        $data = array (
            'No_kartu' => $this->input->post('No_kartu'),
            'NIS' => $this->input->post('NIS'),
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
            'jam_peminjaman' => $this->input->post('jam_peminjaman'),
        );
        $this->db->insert('kartu',$data);
        redirect('index.php/crud','refresh');
    }
    public function delete1($id=NULL){
        $this->db->where('NIS',$id);
        $this->db->delete('siswa');
        redirect('index.php/crud','refresh');
    }
    public function delete2($id=NULL){
        $this->db->where('No_kartu',$id);
        $this->db->delete('kartu');
        redirect('index.php/crud','refresh');
}
}
?>