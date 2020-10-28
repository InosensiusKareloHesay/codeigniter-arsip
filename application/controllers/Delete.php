<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delete extends CI_Controller {

	public function delete_ruang($id){
		$this->model_data->deleteDataRuang($id);
        redirect(base_url('/c_home/loadRuang'));
	}
	public function delete_rak($id){
		$this->model_data->deleteDataRak($id);
        redirect(base_url('/c_home/loadRak'));
	}
	public function delete_box($id){
		$this->model_data->deleteDataBox($id);
        redirect(base_url('/c_home/loadBox'));
	}
	public function delete_map($id){
		$this->model_data->deleteDataMap($id);
        redirect(base_url('/c_home/loadMap'));
	}
	public function delete_urut($id){
		$this->model_data->deleteDataUrut($id);
        redirect(base_url('/c_home/loadUrut'));
	}
	public function delete_dokumen($id){
		$this->model_data->deleteDataDokumen($id);
		redirect(base_url('/c_home/loadPageDokumen'));
	}
}