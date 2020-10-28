<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {

		public function input_ruang(){
			$data=array(
			   'nama'=>$this->input->post('nama')
			);
			$this->model_data->inputRuang($data);
			redirect(base_url('c_home/loadRuang'));
		}
		public function input_rak(){
			$data=array(
			   'nama'=>$this->input->post('nama')
			);
			$this->model_data->inputRak($data);
			redirect(base_url('c_home/loadRak'));
		}
		public function input_box(){
			$data=array(
			   'nama'=>$this->input->post('nama')
			);
			$this->model_data->inputBox($data);
			redirect(base_url('c_home/loadBox'));
		}
		public function input_map(){
			$data=array(
			   'nama'=>$this->input->post('nama')
			);
			$this->model_data->inputMap($data);
			redirect(base_url('c_home/loadMap'));
		}
		public function input_urut(){
			$data=array(
			   'nama'=>$this->input->post('nama')
			);
			$this->model_data->inputUrut($data);
			redirect(base_url('c_home/loadUrut'));
		}
		public function input_user(){
			$config['upload_path']          = './imageprofile/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 10240;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
            	$this->load->view('Register', $error);
            } else {
			$result=$this->upload->data();
			$uploaded=array('img'=>$result);

			$data=array(
			   'nip'=>$this->input->post('nip'),
			   'nama_user'=>$this->input->post('nama'),
			   'jabatan'=>$this->input->post('jabatan'),
			   'username'=>$this->input->post('username'),
			   'password'=>$this->input->post('password'),
			   'level'=>$this->input->post('level'),
			   'foto'=>$uploaded['img']['file_name']
			);
			$this->model_data->inputUser($data);
			redirect(base_url('c_home/loadPageUser'));
		}
	}

		public function input_register(){
			$config['upload_path']          = './imageprofile/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 10240;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
            	$this->load->view('Register', $error);
            } else {
			$result=$this->upload->data();
			$uploaded=array('img'=>$result);

			$data=array(
			   'nip'=>$this->input->post('nip'),
			   'nama_user'=>$this->input->post('nama'),
			   'username'=>$this->input->post('username'),
			   'password'=>$this->input->post('password'),
			   'level'=>$this->input->post('level'),
			   'foto'=>$uploaded['img']['file_name']
			);

			$this->model_data->inputUser($data);
			echo "<script>  
		 			window.location.href='".base_url('/c_home/loadDashboard')."';
		 			alert('Register Success!');
                 </script>";
			}
		}

		public function input_dokumen(){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'doc|docx|pdf|xlsx|csv';
            $config['max_size']             = 10240;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
            	$this->load->view('View_dokumen', $error);
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
				'file_path'=>$uploaded['doc']['file_path'],
				'file_name'=>$uploaded['doc']['file_name']
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
		public function pinjamDokumen($id){
			$lamaHari = $this->input->post('lamaPinjam');
			$tglKembali = date('Y-m-d');
			$data=array(
				'id_user'=>$this->session->userdata("id"),
				'id_dokumen'=>$id,
				'tanggal_pinjam'=>date('Y-m-d'),
				'tanggal_kembali'=>date('Y-m-d', strtotime($tglKembali. ' + '.$lamaHari.' days')),
				'status'=>0
			);
			$query = $this->model_data->inputPinjam($data);
			if($query){
				echo "<script>  
		 			alert('Pinjam Gagal!');
                 </script>";
			} else {
				echo "<script>  
		 			window.location.href='".base_url('/load/loadHistory')."';
		 			alert('Pinjam Berhasil!');
                 </script>";
			}
		}
	}
?>