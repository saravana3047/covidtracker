<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Covid19tracker extends CI_Controller {

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
		 $this->load->model('Covid19tracker_model');
    }
	 
	public function index()
	{ 
		
		//$this->add();
		$trackerRecords =	$this->Covid19tracker_model->getTrackerRecords($_POST);
		$trackerRecords	=	json_decode($trackerRecords,true);
		$this->Covid19tracker_model->clearRecords($_SESSION['adminData']['admin_id']); 
		foreach($trackerRecords as $trackerRecord){
			$_InsertArray	=	array(
				'userid'	=>	$_SESSION['adminData']['admin_id'],
				'country'	=>	$trackerRecord['country'],
				'up_date'	=>	date('Y-m-d',strtotime($trackerRecord['last_updated'])),
				'new_infections'=>	$trackerRecord['new_infections'],
				'new_deaths'	=>	$trackerRecord['new_deaths'],
				'new_recovered'	=>	$trackerRecord['new_recovered'],
			);
			$this->Covid19tracker_model->addCovid19tracker($_InsertArray); 
		}
		$_returnRecords =  $this->Covid19tracker_model->getTrackerSqlRecords($_SESSION['adminData']['admin_id']); 
		echo json_encode($_returnRecords);
	}
	public function checkSession(){
		if(!isset($_SESSION['adminData'])){
			redirect(base_url().'admin');
		}
	} 
	public function settings()
	{ 
		$_Data	=	array();
		if(isset($_POST['saveCovid19trackerSettings'])){
			$this->Covid19tracker_model->updateSettings($_POST); 
			$_Data['_Success']	=	'Bannner Settings Updated Successfully';
		} 
		$_Data['_SettingsData']	=	$this->Covid19tracker_model->getSettingdData(); 
		$this->load->view('admin/covid19tracker/settings',$_Data); 
	}
	public function bottom_covid19tracker()
	{ 
	
		$_Data	=	array();
		if(isset($_POST['saveBottomCovid19tracker'])){
			
			$config['upload_path']          = './uploads/bottom_covid19tracker/';
			$config['allowed_types']        = 'jpg|jpeg|png|gif';
			$config['max_size']             = 1020 * 5; 
			$config['image_width']          = 60;
			$config['image_height']         = 60; 
			 $this->load->library('upload', $config); 
			 $_UploadData		=	array();
			
			if ( ! $this->upload->do_upload('covid19tracker_image')){ 
				$_Data['error']			=	$this->upload->display_errors();  
			}
			 $_UploadData	=	$this->upload->data();
			$_Data 		=	array();
			$_Data['bottom_covid19tracker_id']	=	1;
			$_Data['covid19tracker_image']		=	$_UploadData['file_name']; 
			$this->Covid19tracker_model->updateBottomCovid19tracker($_Data); 
			$_Data['_Success']	=	'Bottom Bannner Updated Successfully';
		} 
		$_Data['_Covid19trackerData']	=	$this->Covid19tracker_model->getBottomCovid19trackerData();  
		print_r($_Data['_Covid19trackerData']);
		$this->load->view('admin/covid19tracker/bottom_covid19tracker',$_Data); 
	}
	public function add($_Covid19trackerId='')
	{ 
		$_Data	=	array();
		$_RelatedCovid19trackers		=	array();
		if(isset($_POST['saveCovid19tracker'])){
				
				$config['upload_path']          = './uploads/covid19tracker/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
				$config['max_size']             = 1020 * 5; 
				$config['image_width']          = 60;
                $config['image_height']         = 60; 
				 $this->load->library('upload', $config); 
				 $_UploadData		=	array();
				if(isset($_POST['covid19tracker_id']) && $_POST['covid19tracker_id']!=''){
					if ( ! $this->upload->do_upload('covid19tracker_image'))
					{ 
						$_UploadData['file_name']			=	$_POST['uploaad_iconname'];
							//$_Data['error']			=	$this->upload->display_errors();  
					}else{
						$_UploadData	=	$this->upload->data();
					}
				}else{ 
					if ( ! $this->upload->do_upload('covid19tracker_image'))
					{ 
						$_Data['error']			=	$this->upload->display_errors();  
					}
					 $_UploadData	=	$this->upload->data();
				}
				
			if(isset($_POST['covid19tracker_id']) && $_POST['covid19tracker_id']!=''){
			    
						$_DataInsert['covid19tracker_id']						=	$_POST['covid19tracker_id'];	 
						$_DataInsert['covid19tracker_name']						=	$_POST['covid19tracker_name'];	 
						$_DataInsert['covid19tracker_desc']						=	$_POST['covid19tracker_desc'];   	
						$_DataInsert['covid19tracker_status']					=	'Y';
						$_DataInsert['covid19tracker_image']					=	$_UploadData['file_name']; 
						$_DataInsert['created_date']					=	date('Y-m-d H:i:s');  
						
				$this->Covid19tracker_model->updateCovid19tracker($_DataInsert); 
				$_Data['_Success']	=	'Covid19tracker Updated Successfully';
			}else{
				
				$_DataInsert['covid19tracker_name']						=	$_POST['covid19tracker_name'];	 
				$_DataInsert['covid19tracker_desc']						=	$_POST['covid19tracker_desc'];   	
				$_DataInsert['covid19tracker_status']					=	'Y';
				$_DataInsert['covid19tracker_image']					=	$_UploadData['file_name']; 
				$_DataInsert['created_date']					=	date('Y-m-d H:i:s');   
				 
				$this->Covid19tracker_model->addCovid19tracker($_DataInsert); 
				$_Data['_Success']	=	'Covid19tracker Added Successfully';
			}
			
		}
		if(isset($_Covid19trackerId) && $_Covid19trackerId!=''){
			$_Data['_Covid19tracker']	=	$this->Covid19tracker_model->getCovid19trackerDataById($_Covid19trackerId); 
		}
		if(isset($_Covid19trackerId) && $_Covid19trackerId!=''){
			$_RelatedCovid19trackers				=	$this->Covid19tracker_model->getRelatedCovid19trackers($_Covid19trackerId); 
		}
		if(empty($_RelatedCovid19trackers)){
			$_RelatedCovid19trackers				=	$this->Covid19tracker_model->getRelatedCovid19trackers(); 
		}
		
		$_Data['_ParentCategory']		=	$this->Covid19tracker_model->getParentCategory(); 
		$_Data['_RelatedCovid19trackers']		=	$_RelatedCovid19trackers; 
		$_Data['_Covid19trackerData']	=	$this->Covid19tracker_model->getCovid19trackerData(); 
		$this->load->view('admin/covid19tracker/add',$_Data); 
	}
	public function delete($_Covid19trackerId='')
	{ 
		$_Data	=	array(); 
		if(isset($_Covid19trackerId) && $_Covid19trackerId!=''){
			$_Data['_Covid19tracker']	=	$this->Covid19tracker_model->deleteCovid19trackerDataById($_Covid19trackerId); 
			$_Data['_Success']	=	'Covid19tracker Deleted Successfully';
		}
		$_Data['_Covid19trackerData']	=	$this->Covid19tracker_model->getCovid19trackerData(); 
		$this->load->view('admin/covid19tracker/add',$_Data); 
	}
	
}
