<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('guest_model');
    }

    public function index()
    {
        $data['data'] = $this->guest_model->guest_lists();
        $this->load->view('/guest/lists',$data);
        
    }
    
    public function add()
    {
       // $read['data'] = $this->guest_model->add();
        $this->load->view('/guest/add');
    }
    
    
    public function edit($id)
    {
        $edit['data'] = $this->guest_model->edit($id);
        $this->load->view('/guest/edit',$edit);
    }
    
    public function update()
    {
        $update = array(
        "id" => $this->input->get_post('id') ? $this->input->get_post('id') : "" ,
        "name" => $this->input->get_post('name') ? $this->input->get_post('name') : "",
        "message" => $this->input->get_post('message') ? $this->input->get_post('message') : ""
        );
        
        $this->guest_model->gb_update($update);
        $this->index();
        
    }
    
}

?>