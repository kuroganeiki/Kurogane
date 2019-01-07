<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class crud extends CI_controller{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data['content'] = $this ->db->get('t_siswa');
        $this ->load->view('crud/table',$data);
    }
    
}
?>