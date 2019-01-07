<?php

class Page extends CI_Controller {

        public function index()
        {
                $data['page_title'] = 'Your title';
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('content', $data);
                $this->load->view('footer');
        }

}

?>