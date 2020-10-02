<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
	  
	public function getCheckAdminAccess($_AdminEmail,$_AdminPassword){ 
		
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_username',$_AdminEmail);
        $this->db->where('admin_password',$_AdminPassword);
        //$this->db->where('role',1);
        $this->db->where('status','Y');
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function getAdminData($_AdminEmail,$_AdminPassword){ 
		
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_username',$_AdminEmail);
        $this->db->where('admin_password',$_AdminPassword);
        //$this->db->where('role',1);
        $this->db->where('status','Y');
        $query = $this->db->get();
		$_Rst	=	$query->row_array(); 
        return $_Rst;
	}
	public function getAdminDataById($_AdminId){ 
		
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id',$_AdminId); 
        $query = $this->db->get();
		$_Rst	=	$query->row_array(); 
        return $_Rst;
	}
	public function updateAdminProfile($_Data){ 
		
		$_AdminId	=	$_SESSION['adminData']['admin_id'];
		$_DataUpdate['admin_firstname']		=	$_Data['first_name'];
		$_DataUpdate['admin_lastname']		=	$_Data['last_name'];
		$_DataUpdate['admin_username']		=	$_Data['email'];
		if($_Data['password']!='')
			$_DataUpdate['admin_password']			=	$_Data['password'];
		
		$this->db->where('admin_id',$_AdminId); 
		$this->db->update('admin',$_DataUpdate);  
	}
	public function getCountries(){ 
		
		$this->db->select('*');
        $this->db->from('country');     
		$this->db->order_by('name','asc'); 		
        $query = $this->db->get();
		$_Rst	=	$query->result_array();  
        return $_Rst; 
	}
}