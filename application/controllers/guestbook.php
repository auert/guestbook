<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {
		public function __construct()
	{
        parent::__construct();
        $this->load->model('guest_model');
	}
    
	//edit
	public function edit($id)
	{
        
		$data['data'] = $this->guest_model->edit($id);
        
        
        $this->load->view('/guest/edit',$data);
	}
    
	//add
	public function add()
	{
  $data = array (
  "name" => $this->input->get_post('name') ? $this->input->get_post('name') : ""  ,
  "message" => $this->input->get_post('message') ? $this->input->get_post('message') :"" 
  );
  $this->load->view('/guest/add',$data);
	}
	
    
 	//updata
    public function updata()
	{
    
    $updata = array (
  "id" => $this->input->get_post('id') ? $this->input->get_post('id') : ""  ,
  "name" => $this->input->get_post('name') ? $this->input->get_post('name') :"",
  "message" => $this->input->get_post('message') ? $this->input->get_post('message') :"" 
   );
     $this->guest_model->gb_updata($updata);
	}
    
    
 	//insert
    public function insert_db()
	{
    
    $indata = array (
  "name" => $this->input->get_post('name') ? $this->input->get_post('name') : ""  ,
  "message" => $this->input->get_post('message') ? $this->input->get_post('message') :"" 
  );
    $this->guest_model->gbinsert($indata);
	}	   
    
    
	//delete
    public function delete($id)
	{
      
       //echo $id;
       $this->guest_model->delete($id);
       
	}


	

	//list
    public function lists()
	{   
        $data['data'] = $this->guest_model->guest_lists();
        $this->load->view('/guest/lists',$data);
        
      //  $abc=$datarow->result_array();
        
    	
    //	$this->load->view('/guest/lists',$data);
	}
	

}
