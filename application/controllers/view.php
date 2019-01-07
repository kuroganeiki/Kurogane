<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class view extends CI_controller{
    public function index(){
        function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function user(){
		$data['t_siswa'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_table',$data);
	}
        
        $this->load->view('struktur/meta');
        $this->load->view('struktur/header');
        $this->load->view('struktur/sidebar');
        $this->load->view('pages/home');

        $this->load->view('struktur/footer');

        
    }

    

}
?>