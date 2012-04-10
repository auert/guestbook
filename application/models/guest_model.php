<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guest_model extends CI_Model {
	
  public function __construct()
	{
    
      parent::__construct();
      $this->load->database();
      
	}

    //list
public function guest_lists()
	{
    
   $query = $this->db->query("select * from message order by add_time desc ");
   return $query;
   
   	}
	
	
		//insert_db
    public function gbinsert($data=array())
	{
	
    $this->db->insert('message',$data);
	
	}
    
		//delete
    public function delete($id)
	{
    
    $this->db->where('id',$id);
	$this->db->delete('message');  
    
	}
    
    
    //edit
    public function edit($id)
	{
    
    $edit = $this->db->query("select * from message where id='$id' ");
    
    return $edit;
   
   	}
   
   
    //updata_db
    public function gb_update($data=array())
	{
   /* $update = array(
    'id' =>$data['id'],
    'name' =>$data['name'],
    'message' =>$data['message'],
    'add_time' =>""
    );
    */
	//echo $data['id']."<br>";
    //echo $data['name']."<br>";
    //echo $data['message']."<br>";
   $this->db->where('id',$data['id']);
   $this->db->update('message',$data); 
		
	}
}	
