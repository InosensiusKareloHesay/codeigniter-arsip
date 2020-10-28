<?php
class C_login extends CI_Controller{

    public function index(){
    	if($this->session->userdata("login") == TRUE){
    		echo "<script>  
		 			window.location.href='".base_url('/c_home/loadDashboard')."';
		 			alert('Anda Sudah Login!');
                 </script>";
    	} else {
        $this->load->view('login');
    	}
    }

    public function do_login()
	{
		//$user = $this->session->userdata('username');
		$getLevel = $this->model_login->get_level($this->input->post('username'));
		$id = $this->model_login->get_id($this->input->post('username'));
		 if($this->model_login->login($this->input->post('username'), $this->input->post('password'))==TRUE){
		 	
		 	$this->session->set_userdata("level", $getLevel);
		 	$this->session->set_userdata("name", $this->input->post('username'));
		 	$this->session->set_userdata("login", TRUE);
		 	$this->session->set_userdata("id", $id);
		 	echo "<script>  
		 			window.location.href='".base_url('/c_home/loadDashboard')."';
		 			alert('Login Success!');
                 </script>";
		 }else{
		 	echo "<script>
                    window.location.href='".base_url('/c_login')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
		 }
 	}

 	public function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function register(){
		$this->load->view('Register');
	}
}
?>