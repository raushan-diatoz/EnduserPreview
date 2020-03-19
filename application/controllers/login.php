
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}	
		
	public function index()
	{
		if(isset($this->session->login) && !empty($this->session->login)){
			redirect('ois', 'refresh');
		}
		
		// $this->load->helper('form');
		// $this->load->library('form_validation');
		
		// $this->form_validation->set_rules('username', 'User Name', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		
		// if($this->form_validation->run() == false){
		// 	$this->load->view('login');	
		// }
		// else{
			
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			
			$user = $this->login_model->checkLogin($user, $pass);
			
			if(is_array($user)){
				$this->session->set_userdata($user);
				redirect('ois', 'refresh');
			}else{
				
				$data['errorMessage'] = "Wrong User or Password";
				$this->load->view('login',$data);
			}
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
	
	function createPassword(){
		$password_string = 'testing123';
		$options = array(
			'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
			'cost' => 12,
		  );
		  $password_hash = password_hash($password_string, PASSWORD_BCRYPT, $options);
		  /*
			
			if (password_verify($password_string, $password_hash)) {
			echo 'Correct password';
			} else {
			echo 'inCorrect password';
			}
			*/
	}
}
