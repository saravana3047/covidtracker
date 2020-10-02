<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls<?php echo base_url();?>upload
	 */
	 
	public function __construct()
    {
         parent::__construct();
         $this->load->helper('form');
         $this->load->helper('url'); 
		 $this->load->model('Admin_model');
    }
	 
	public function index()
	{ 
		$this->checkSession(); 
		$this->load->view('admin/login');
	}
	public function checkSession(){
		if(isset($_SESSION['adminData'])){
			redirect(base_url().'admin/dashboard');
		}
	}
	public function dashboard()
	{ 
		$_Data	=	array();
		$_SearchData		=	array(); 
		$_Data['countries']	=	$this->Admin_model->getCountries(); 
		$this->load->view('admin/dashboard',$_Data);
	} 
	public function logout()
	{ 
		session_destroy();
		redirect(base_url().'admin');
	}
	
	public function login(){  
		$this->checkSession();
		if(!isset($_SESSION['adminData'])){
			$_AdminUsername		=	$_POST['admin_email'];
			$_AdminPassword		=	$_POST['admin_password'];
			$_ResultLogin 		=	$this->Admin_model->getCheckAdminAccess($_AdminUsername,$_AdminPassword); 
			if($_ResultLogin > 0){
				$_ResultLoginData 		=	$this->Admin_model->getAdminData($_AdminUsername,$_AdminPassword);  
				$_SESSION['adminData']	=	$_ResultLoginData; 
				redirect(base_url().'admin/dashboard'); 
			}
			else{
				$_Data['Error']			=	'Invalid Login Details';
				$_Data['_PostData']		=	$_POST;
				$this->load->view('admin/login',$_Data);
			} 
		}
	}
	
	
}
