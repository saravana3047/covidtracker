<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model extends CI_Model {

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
	  
	 
	 
	public function getCountryDataById($_CountryId){ 
		
		$this->db->select('*');
        $this->db->from('country');
        $this->db->where('country_id',$_CountryId); 
        $query = $this->db->get();
		$_Rst	=	$query->row_array(); 
        return $_Rst;
	}
	 
	public function getCountryData(){ 
		
		$this->db->select('*');
        $this->db->from('country'); 
        $query = $this->db->get();
		$_Rst	=	$query->result_array(); 
        return $_Rst; 
	}
	public function updateCountry($_Country){	
		$_Country_id	=	$_Country['country_id'];
		 $_Data	=	array('name'=>$_Country['name'],'status'=>'Y');
		 $this->db->where('country_id',$_Country_id); 
		$query = $this->db->update('country',$_Data);
	}
	public function addCountry($_Country){	
		$_Data	=	array('name'=>$_Country['name'],'status'=>'Y');
		$query = $this->db->insert('country',$_Data);
		 
	}
	public function deleteCountryDataById($_Country_id){	
		$_Data	=	array('country_id'=>$_Country_id);
		$query = $this->db->delete('country',$_Data);
		 
	}
	 
}