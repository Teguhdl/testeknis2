<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

   

	public function index()
	{
        session_destroy();
		$this->load->view('login_form');
	}

    public function ceklogin()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->db->get_where("user",$where)->num_rows();
        $use = $this->db->get_where("user",$where)->row();
        if($cek > 0){
            $data_session = array(
                'username' => $username,
                'status' => "login",
                'level' => $use->level,
                'gambar'=> $use ->gambar,
                );
 
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('success_msg', 'Hello '.$username.', have a good day!');
            redirect(base_url("user"));
        }else{
            $this->session->set_flashdata('error_msg', 'Username atau password nya salah');
            redirect("login");
        }

	}
    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('sucses_msg', 'Now you are logout.');
        redirect('login');
    }
}
