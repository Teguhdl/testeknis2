<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
		{
    parent::__construct();			
			if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
            $this->load->model('usermode');
        }

    public function index(){
        $data1['total'] = $this->usermode->hitungJumlahuser();
        $data = $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();

       if($data['active'] == 1){
            $data['active'] = 'Aktif';
        }else{
            $data['active'] = 'Tidak Aktif';
        }

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('user/user',$data1);
        $this->load->view('template/footer');
    }

}