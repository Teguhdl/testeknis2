<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/admin',$data1);
        $this->load->view('template/footer');
    }

    public function lihat_data(){
        $data1 = array(
            'user' => $this->usermode->getData(),
    );
        $data = $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/lihat_data',$data1);
        $this->load->view('template/footer');

    }
    function tambah_data(){
        $this->form_validation->set_rules('id_user', 'Id User', 'required', array('required' => 'Anda harus memasukkan %s.'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Anda harus memasukkan %s.'));
        $this->form_validation->set_rules('level', 'Level', 'required', array('required' => 'Anda harus memasukkan %s.'));
        $this->form_validation->set_rules('active', 'status', 'required', array('required' => 'Anda harus memasukkan %s.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
        
        if ($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post('username', true);
            $data = [
                'id_user' => htmlspecialchars($this->input->post('id_user', true)),
                'username' => htmlspecialchars($username),
                'level' => $this->input->post('level'),
                'gambar' => 'user1.jpg',
                'password' => $this->input->post('password'),
                'active' => $this->input->post('active'),
            ];
            if ($this->db->insert('user',$data)) 
            {
                $this->session->set_flashdata('succses_msg', 'Data berhasil disimpan.');
                redirect('admin/lihat_data');
            }
            else
            {
                $this->session->set_flashdata('error_msg', 'Data gagal disimpan.');
                redirect('admin/lihat_data');
            }
        }   
        else
        {
            $data = $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar',$data);
            $this->load->view('admin/tambah_data',$data);
            $this->load->view('template/footer');
        }

    }

    function hapus_data($id){
        // $id=  $this->uri->segment(3);	        
        $this->db->where('id_user',$id);
        $this->db->delete('user');	        
        //delete barang from kartu stok
        $this->session->set_flashdata('succses_msg', 'User '.$id.' Berhasil Dihapus');
        redirect('admin/lihat_data');

    }
}