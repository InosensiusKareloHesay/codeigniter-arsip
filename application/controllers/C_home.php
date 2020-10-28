<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
    
	public function loadDashboard()
	{
        if (($this->session->userdata("login") == TRUE) && ($this->session->userdata("level")) == 1){
            $data['dokumen'] = $this->model_data->get_jumlahDokumen();
            $data['user'] = $this->model_data->get_jumlahUser();
            $data['total'] = $this->model_data->get_jumlahTrans();
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('View_admin',$data);
            $this->load->view('Footer');
        } else if(($this->session->userdata("login") == TRUE) && ($this->session->userdata("level")) == 0){
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header2',$data);
            $this->load->view('Index_user',$data);
            $this->load->view('Footer');
        }
        else {
            $this->load->view('Login');
        }
	}
    
    public function loadApproval(){
            $data['req'] = $this->model_data->get_requestFile();
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('View_approval',$data);
            $this->load->view('Footer');
    }
    public function loadPengembalian(){
            $data['back'] = $this->model_data->get_pengembalianFile();
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('View_pengembalian', $data);
            $this->load->view('Footer');
    }
    public function loadReport(){
            $data['row'] = $this->model_data->getReport();
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('V_reportpeminjaman',$data);
            $this->load->view('Footer');
    }
    public function loadPageUser(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadPageUser');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahUser();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['user'] = $this->model_data->get_user($config['per_page'],$offset);
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('View_peminjam',$data);
            $this->load->view('Footer');
    }
    public function loadInputUser(){
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('Input_peminjam');
            $this->load->view('Footer');
    }
    public function loadPageDokumen(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadPageDokumen');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahDokumen();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['doc'] = $this->model_data->get_doc($config['per_page'],$offset);
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('View_dokumen',$data);
            $this->load->view('Footer');
    }
    public function loadInputDokumen(){
            $data['ruang'] = $this->model_data->getDataRuang();
            $data['rak'] = $this->model_data->getDataRak();
            $data['box'] = $this->model_data->getDataBox();
            $data['map'] = $this->model_data->getDataMap();
            $data['urut'] = $this->model_data->getDataUrut();
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('Input_dokumen',$data);
            $this->load->view('Footer');
    }

    public function loadAbout(){
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header',$data);
            $this->load->view('Aboutus');
            $this->load->view('Footer');
    }
}