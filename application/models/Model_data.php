<?php
class Model_data extends CI_Model {

	public function getUserData($id){
		$query = $this->db->get_where('account', array('id_user'=>$id))->result_array();
		return $query;
	}

	//Fungsi untuk Ruang
	public function get_jumlahRuang(){
		return $this->db->get('ruang')->num_rows();
	}
	public function get_ruang($number,$offset){
		$query = $this->db->get('ruang',$number,$offset);
        return $query->result_array();
	}
	public function getDataRuang(){
		return $this->db->get('ruang')->result_array();
	}
	public function inputRuang($data){
		$this->db->insert('ruang',$data);
	}
	public function getEditRuang($id){
		$query = $this->db->get_where('ruang', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataRuang($id,$data){
		$this->db->where('id',$id);
		$this->db->update('ruang',$data);
	}
	public function deleteDataRuang($id){
		$this->db->delete('ruang', array('id'=>$id));
	}

	//Fungsi untuk Rak
	public function get_jumlahRak(){
		return $this->db->get('rak')->num_rows();
	}
	public function get_rak($number,$offset){
		$query = $this->db->get('rak',$number,$offset);
        return $query->result_array();
	}
	public function getDataRak(){
		return $this->db->get('rak')->result_array();
	}
	public function inputRak($data){
		$this->db->insert('rak',$data);
	}
	public function getEditRak($id){
		$query = $this->db->get_where('rak', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataRak($id,$data){
		$this->db->where('id',$id);
		$this->db->update('rak',$data);
	}
	public function deleteDataRak($id){
		$this->db->delete('rak', array('id'=>$id));
	}

	//Fungsi untuk Box
	public function get_jumlahBox(){
		return $this->db->get('box')->num_rows();
	}
	public function get_box($number,$offset){
		$query = $this->db->get('box',$number,$offset);
        return $query->result_array();
	}
	public function getDataBox(){
		return $this->db->get('box')->result_array();
	}
	public function inputBox($data){
		$this->db->insert('box',$data);
	}
	public function getEditBox($id){
		$query = $this->db->get_where('box', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataBox($id,$data){
		$this->db->where('id',$id);
		$this->db->update('box',$data);
	}
	public function deleteDataBox($id){
		$this->db->delete('box', array('id'=>$id));
	}

	//Fungsi untuk map
	public function get_jumlahMap(){
		return $this->db->get('map')->num_rows();
	}
	public function get_map($number,$offset){
		$query = $this->db->get('map',$number,$offset);
        return $query->result_array();
	}
	public function getDataMap(){
		return $this->db->get('map')->result_array();
	}
	public function inputMap($data){
		$this->db->insert('map',$data);
	}
	public function getEditMap($id){
		$query = $this->db->get_where('map', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataMap($id,$data){
		$this->db->where('id',$id);
		$this->db->update('map',$data);
	}
	public function deleteDataMap($id){
		$this->db->delete('map', array('id'=>$id));
	}

	//Fungsi untuk urut
	public function get_jumlahUrut(){
		return $this->db->get('urut')->num_rows();
	}
	public function get_urut($number,$offset){
		$query = $this->db->get('urut',$number,$offset);
        return $query->result_array();
	}
	public function getDataUrut(){
		return $this->db->get('urut')->result_array();
	}
	public function inputUrut($data){
		$this->db->insert('urut',$data);
	}
	public function getEditUrut($id){
		$query = $this->db->get_where('urut', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataUrut($id,$data){
		$this->db->where('id',$id);
		$this->db->update('urut',$data);
	}
	public function deleteDataUrut($id){
		$this->db->delete('urut', array('id'=>$id));
	}

	//Fungsi untuk user
	public function get_user($number,$offset){
		$query = $this->db->get_where('account',array('level'=>0),$number,$offset);
        return $query->result_array();
	}
	public function get_jumlahUser(){
		return $this->db->get_where('account',array('level'=>0))->num_rows();
	}
	public function inputUser($data){
		$this->db->insert('account',$data);
	}
	public function getEditUser($id){
		$query = $this->db->get_where('account', array('id_user'=>$id))->result_array();
		return $query;
	}
	public function updateDataUser($id,$data){
		$this->db->where('id_user',$id);
		$this->db->update('account',$data);
	}
	public function deleteDataUser($id){
		$this->db->delete('account', array('id_user'=>$id));
	}

	//Fungsi untuk dokumen
	public function get_jumlahDokumen(){
		return $this->db->get('dokumen')->num_rows();
	}
	public function get_doc($number,$offset){
		$query = $this->db->get('dokumen',$number,$offset);
        return $query->result_array();
	}
	public function inputDokumen($data){
		$this->db->insert('dokumen',$data);
	}
	public function getEditDokumen($id){
		$query = $this->db->get_where('dokumen', array('id'=>$id))->result_array();
		return $query;
	}
	public function updateDataDokumen($id,$data){
		$this->db->where('id',$id);
		$this->db->update('dokumen',$data);
	}
	public function deleteDataDokumen($id){
		$row = $this->db->get_where('dokumen',array('id' => $id))->row();
    	$query = $this->db->delete('dokumen',array('id'=>$id));
        if($query){
        	unlink("$row->file_path");
        }
    }
    public function get_requestFile(){
    	$query = "SELECT * FROM peminjaman join dokumen join account where peminjaman.id_dokumen = dokumen.id and peminjaman.id_user = account.id_user and peminjaman.status = ? order by id_dokumen desc";
    	$row = $this->db->query($query, array('status'=>0));
    	return $row->result_array();
    }
    public function get_pengembalianFile(){
    	$query = "SELECT * FROM peminjaman join dokumen where peminjaman.id_dokumen = dokumen.id and peminjaman.status = ? order by id_dokumen desc";
    	$row = $this->db->query($query, array('status'=>1));
    	return $row->result_array();
    }
    public function getReport(){
    	$query = "SELECT * FROM peminjaman join dokumen join account where peminjaman.id_dokumen = dokumen.id and peminjaman.id_user = account.id_user and peminjaman.status = 1 or peminjaman.status = 2";
    	$row = $this->db->query($query);
        return $row->result_array();
    }
    public function getReportUser($id){
    	$query = "SELECT * FROM peminjaman join dokumen join account where peminjaman.id_dokumen = dokumen.id and peminjaman.id_user = account.id_user and peminjaman.id_user = $id";
    	$row = $this->db->query($query);
        return $row->result_array();
    }
    public function get_jumlahPinjam($id){
    	return $this->db->get_where('peminjaman', array('id_user'=>$id));
    }
    public function inputPinjam($data){
    	$this->db->insert('peminjaman',$data);
    }
    public function updateStatusPeminjaman($id_peminjaman,$data){
    	$this->db->where('id_peminjaman',$id_peminjaman);
    	$this->db->update('peminjaman',$data);
    }
    public function get_jumlahTrans(){
		return $this->db->get('peminjaman')->num_rows();
	}

	public function getSearchDokumen($namafile){
		$this->db->select('*');
		$this->db->from('dokumen');
		$this->db->like('nama_dokumen',$namafile);
		return $this->db->get()->result_array();
	}
}?>