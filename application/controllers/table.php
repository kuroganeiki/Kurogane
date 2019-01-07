<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class crud extends CI_controller{
    public function __construct(){
        parent::__construct();
    }
    function index()
    {
        $data['t_siswa'] = $this ->db->get('t_siswa');
        $this ->load->view('struktur/v_table',$data);
    }
    public function add(){
        
    }
    public function updaate($id = NULL){
        
    }
    public function delete($id = NULL){
        
    }
}
?>