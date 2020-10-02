<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Country extends CI_Controller {

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
		 $this->load->model('Country_model');
    }
	 
	public function index()
	{ 
		$this->checkSession();
		$this->add();
	}
	public function checkSession(){
		if(!isset($_SESSION['adminData'])){
			redirect(base_url().'admin');
		}
	} 
	public function add($_CountryId='')
	{ 
		$_Data	=	array();
		if(isset($_POST['saveCountry'])){
			if(isset($_POST['country_id']) && $_POST['country_id']!=''){
				$this->Country_model->updateCountry($_POST); 
				$_Data['_Success']	=	'Country Updated Successfully';
			}else{
				$this->Country_model->addCountry($_POST); 
				$_Data['_Success']	=	'Country Added Successfully';
			}
			
		} 
		if(isset($_CountryId) && $_CountryId!=''){
			$_Data['_Country']	=	$this->Country_model->getCountryDataById($_CountryId); 
		}
		$_Data['_CountryData']	=	$this->Country_model->getCountryData(); 
		$this->load->view('admin/country/add',$_Data); 
	}
	public function delete($_CountryId='')
	{ 
		$_Data	=	array(); 
		if(isset($_CountryId) && $_CountryId!=''){
			$_Data['_Country']	=	$this->Country_model->deleteCountryDataById($_CountryId); 
			$_Data['_Success']	=	'Country Deleted Successfully';
		}
		$_Data['_CountryData']	=	$this->Country_model->getCountryData(); 
		$this->load->view('admin/country/add',$_Data); 
	}
	
}
