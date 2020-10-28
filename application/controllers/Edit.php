<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit extends CI_Controller {
	public function getDataRuang(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditRuang($id);
		$data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_ruang',$data);
        $this->load->view('Footer');
	}

	public function update_ruang(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$data=array(
				'nama' => $nama
				);
		$this->model_data->updateDataRuang($id,$data);
        redirect(base_url('/c_home/loadRuang'));  
	}

	//fungsi rak
	public function getDataRak(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditRak($id);
		$data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_rak',$data);
        $this->load->view('Footer');
	}

	public function update_rak(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$data=array(
				'nama' => $nama
				);
		$this->model_data->updateDataRak($id,$data);
        redirect(base_url('/c_home/loadRak'));  
	}

	//fungsi box
	public function getDataBox(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditBox($id);
        $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_box',$data);
        $this->load->view('Footer');
	}

	public function update_box(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$data=array(
				'nama' => $nama
				);
		$this->model_data->updateDataMap($id,$data);
        redirect(base_url('/c_home/loadMap'));  
	}

	//fungsi map
	public function getDataMap(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditMap($id);
        $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_map',$data);
        $this->load->view('Footer');
	}

	public function update_map(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$data=array(
				'nama' => $nama
				);
		$this->model_data->updateDataMap($id,$data);
        redirect(base_url('/c_home/loadMap'));  
	}

	//fungsi urut
	public function getDataUrut(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditUrut($id);
        $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_urut',$data);
        $this->load->view('Footer');
	}

	public function update_urut(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$data=array(
				'nama' => $nama
				);
		$this->model_data->updateDataUrut($id,$data);
        redirect(base_url('/c_home/loadUrut'));  
	}

	//fungsi dokumen
	public function getDataDokumen(){
		$id=$this->uri->segment(3);
		$data['row'] = $this->model_data->getEditDokumen($id);
        $data['profile'] = $this->model_data->getUserData($this->session->userdata("id"));
        $this->load->view('Header',$data);
        $this->load->view('Edit_dokumen',$data);
        $this->load->view('Footer');
	}

	public function update_dokumen(){
		$id=$this->uri->segment(3);
		$nama=$this->input->post('nama');
		$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'doc|docx|pdf|xlsx|csv';
            $config['max_size']             = 1024;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
            	$this->load->view('view_dokumen', $error);
            } else {
			$result=$this->upload->data();
			$uploaded=array('doc'=>$result);
			$ruang = $this->input->post('ruang');
			$rak = $this->input->post('rak');
			$box = $this->input->post('box');
			$map = $this->input->post('map');
			$urut = $this->input->post('urut');
			$lokasi = "$ruang.$rak.$box.$map.$urut";
			$data=array(
				'nama_dokumen'=>$this->input->post('nama'),
				'nomor_dokumen'=>$this->input->post('nomor'),
				'lokasi'=>$lokasi,
				'kode_dokumen'=>$this->input->post('kode'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'tanggal_upload'=>date('Y-m-d'), 
				'size'=>$uploaded['doc']['file_size'],
				'file_path'=>$uploaded['doc']['full_path']
			);
			$query = $this->model_data->inputDokumen($data);
			if($query){
				echo "<script>  
		 			alert('Upload Failed!');
                 </script>";
			} else {
				echo "<script>  
		 			window.location.href='".base_url('/c_home/loadPageDokumen')."';
		 			alert('Upload Success!');
                 </script>";
			}  
		}
	}

	public function approveDokumen($id_peminjaman){
		$status = $this->input->post('status');
		$data=array(
			'status' => $status
		);
		$query = $this->model_data->updateStatusPeminjaman($id_peminjaman,$data);
			if($query){
				echo "<script>  
		 			alert('Update Failed');
                 </script>";
			} else {
				echo "<script>  
		 			window.location.href='".base_url('/c_home/loadApproval')."';
		 			alert('Success Updating!');
                 </script>";
			}
	}
}