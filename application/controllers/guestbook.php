<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('guest_model');
    }
    
    
    public function index()
    {
        $this->lists();
    }
    

    //edit
    public function edit($id='')
    {       
        $data['data'] = $this->guest_model->edit($id);
        $this->load->view('/guest/edit',$data);
    }

    
    //view
    public function view()
    {       
        $data['data'] = $this->guest_model->guest_lists(); //讀取資料庫內容放入data
        $this->load->view('/guest/lists',$data); //將陣列data丟入lists顯示
        $this->load->view('/guest/add');
    }


    //add
    public function add()
    {
        $data = array (
        "name" => $this->input->get_post('name') ? $this->input->get_post('name') : ""  ,
        "message" => $this->input->get_post('message') ? $this->input->get_post('message') : "" 
        //if接收到name把name放入"name"中
        );
        $this->load->view('/guest/add',$data);
    }


    //updata
    public function update()
    {    
        $update = array (
        "id" => $this->input->get_post('id') ? $this->input->get_post('id') : ""  ,
        "name" => $this->input->get_post('name') ? $this->input->get_post('name') :"",
        "message" => $this->input->get_post('message') ? $this->input->get_post('message') :"" 
        );
    
        $this->guest_model->gb_update($update);
        $this->lists();//讀取lists function
    }
    
    
    //insert
    public function insert_db()
    {
        $indata = array (
        "name" => $this->input->get_post('name') ? $this->input->get_post('name') : ""  ,
        "message" => $this->input->get_post('message') ? $this->input->get_post('message') :""
        );
   
        $this->guest_model->gbinsert($indata);
        $this->lists();
    }


    //delete
    public function delete($id='')
    {
        //echo $id;
        $this->guest_model->delete($id);
        $this->lists();
    }


    //list
    public function lists()
    {   
        $data['data'] = $this->guest_model->guest_lists();
        $this->load->view('/guest/lists',$data);
        //  $abc=$datarow->result_array();
        //  $this->load->view('/guest/lists',$data);
    }

    
    //deleteall
    public function deleteall()
    {
        $check = $this->input->get_post('c1');
        for($i=0;$i<count($check);$i++)
        {
            $this->guest_model->delete($check[$i]);
        }
        
        $this->lists();
        //  $abc=$datarow->result_array();
        //  $this->load->view('/guest/lists',$data);
    }
    
    public function user()
    {
        $user = array(
        "user_name"=>$this->input->get_post('name'),
        "user_company"=>$this->input->get_post('company')
        );
        //var_dump($user);
        $this->load->model('user_model');
        $this->user_model->user_insert($user);
        
    }
}
