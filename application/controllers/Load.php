<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Load extends CI_Controller {

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
            $config['base_url'] = base_url('load/loadPageDokumen');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahDokumen();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['doc'] = $this->model_data->get_doc($config['per_page'],$offset);
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));;
            $this->load->view('Header2',$data);
            $this->load->view('View_dokumen',$data);
            $this->load->view('Footer');
    }

    public function loadHistory(){
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
            $config['total_rows'] = $this->model_data->get_jumlahPinjam($this->session->userdata("id"));
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);

            $id = $this->session->userdata("id");

    		$data['report'] = $this->model_data->getReportUser($id);
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('Header2',$data);
            $this->load->view('V_historypinjam',$data);
            $this->load->view('Footer');
    }

    public function searchdoc(){
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

            $search = $this->input->post("search");
            $data['search'] = $this->model_data->getSearchDokumen($search);
            $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
            if ($this->session->userdata("level")==0){
                $this->load->view('Header2',$data);
            }elseif ($this->session->userdata("level")==1) {
                $this->load->view('Header',$data);
            }
            $this->load->view('View_result',$data);
            $this->load->view('Footer');
    }

    public function downloadFile(){
    	$name = $this->input->post('filename');
    	$data = file_get_contents('./upload/'.$name);
    	force_download($name,$data);
    }
}