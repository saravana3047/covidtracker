<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid19tracker_model extends CI_Model {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
         parent::__construct();
         $this->load->helper('form');
         $this->load->helper('url'); 
		 $this->load->database();
    }
	  
	 
	 
	 
	public function getTrackerRecords($_CovidSearch){ 
		
		
		
		$_CountryCod	=	(isset($_CovidSearch['countryCode'] ) && $_CovidSearch['countryCode']!='') ? $_CovidSearch['countryCode'] : 'IN';
		$startDate		=	(isset($_CovidSearch['startDate']) && $_CovidSearch['startDate']!='') ? $_CovidSearch['startDate'] : date('Y-m-d',strtotime("-10 day"));
		$endDate		=	(isset($_CovidSearch['endDate']) && $_CovidSearch['endDate']!='') ? $_CovidSearch['endDate'] : date('Y-m-d');
		$url	=	"http://api.coronatracker.com/v3/analytics/newcases/country?countryCode=$_CountryCod&startDate=$startDate&endDate=$endDate";
		$header = array('Accept-Language: en');

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$data = curl_exec($curl);
		curl_close($curl); 
			return $data; 

	}
	
		public function addCovid19tracker($_Covid19tracker){ 
		$query = $this->db->insert('covid19tracker',$_Covid19tracker);
		 
	}
	public function clearRecords($userid){	
		$_Data	=	array('userid'=>$userid);
		$query = $this->db->delete('covid19tracker',$_Data);
		 
	}
	public function getTrackerSqlRecords($userId){ 
		
		$this->db->select('*');
        $this->db->from('covid19tracker'); 
		$this->db->where('userid',$userId); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}

	public function getCovid19trackerDataById($_Covid19trackerId){ 
		
		$this->db->select('*');
        $this->db->from('covid19tracker');
        $this->db->where('covid19tracker_id',$_Covid19trackerId); 
        $query = $this->db->get();
		$_Rst	=	$query->row_array(); 
        return $_Rst;
	}
	 
	public function getCovid19trackerData(){ 
		
		$this->db->select('*');
        $this->db->from('covid19tracker'); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}
	public function getRelatedCovid19trackers($_Covid19trackerId=''){ 
		
		$this->db->select('*');
        $this->db->from('covid19tracker'); 
		if($_Covid19trackerId!='')
			$this->db->where('covid19tracker_id <>',$_Covid19trackerId); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}
	
	public function getSubject($_SubjectId){ 
		
		$this->db->select('*');
        $this->db->from('subject'); 
        $query = $this->db->get();
		$this->db->where('subject_id',$_SubjectId); 
		$_Rst	=	$query->row_array(); 
        return $_Rst['name']; 
	}
	
	public function getParentCategory(){ 
		
		$this->db->select('*');
        $this->db->from('subject'); 
		// $this->db->where('parent_category',0); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}
	
	public function updateCovid19tracker($_Covid19tracker){	
		$_Covid19tracker_id	=	$_Covid19tracker['covid19tracker_id'];
		 $_Data	=	array('covid19tracker_name'=>$_Covid19tracker['covid19tracker_name'],'status'=>'Y','covid19tracker_desc'=>$_Covid19tracker['covid19tracker_desc'],'covid19tracker_image'=>$_Covid19tracker['covid19tracker_image'],'created_date'=>$_Covid19tracker['created_date']);
		 $this->db->where('covid19tracker_id',$_Covid19tracker_id); 
		$query = $this->db->update('covid19tracker',$_Data);
	}
	
	
	public function deleteCovid19trackerDataById($_Covid19tracker_id){	
		$_Data	=	array('covid19tracker_id'=>$_Covid19tracker_id);
		$query = $this->db->delete('covid19tracker',$_Data);
		 
	}
	public function updateSettings($_Settings){		 
		foreach($_Settings as $_settings_id =>$_Setting){ 
			$_DataUpdate['value']			=	$_Setting;
			$this->db->where('covid19tracker_settings_id',$_settings_id); 
			$this->db->update('covid19tracker_settings',$_DataUpdate); 
		}
	}
	public function getSettingdData(){ 
		
		$this->db->select('*');
        $this->db->from('covid19tracker_settings'); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}
	 
	 public function updateBottomCovid19tracker($_Data){ 
		 
		$_Covid19trackerBottomId				=	$_Data['bottom_covid19tracker_id'];
		$_DataArr['covid19tracker_image']		=	$_Data['covid19tracker_image'];
		$this->db->where('bottom_covid19tracker_id',$_Covid19trackerBottomId); 
		$this->db->update('bottom_covid19tracker',$_DataArr);  
	}
	
	public function getBottomCovid19trackerData(){		
		$this->db->select('*');
        $this->db->from('bottom_covid19tracker');  
		$this->db->where('bottom_covid19tracker_id',1); 
        $query = $this->db->get();
		$_Rst	=	$query->row_array(); 
        return $_Rst; 
	}
}