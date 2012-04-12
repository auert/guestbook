<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('news_model');
        }
    
    //
    public function index()
    {

        $this->lists();
    }
    
    //
    public function lists()
    {
        $data['data'] = $this->user_model->join_lists();
        $this->load->view('/user/all_lists',$data);
    }
    
    //
    public function user()
    {
        $user = array(
        "user_name"=>$this->input->get_post('name'),
        "user_company"=>$this->input->get_post('company')
        );
        //var_dump($user);
        $this->user_model->user_insert($user);
        $this->lists();
    }
        
    //
    public function addnews()
    {

        $news = array(
        "user_id"=>$this->input->get_post('id'),
        "news_title"=>$this->input->get_post('title'),
        "news_message"=>$this->input->get_post('message')
        );
        //var_dump($news);
        $this->news_model->news_insert($news);
        $this->lists();
        
    }
    
    //user_add
    public function user_add()
    {   
        $this->load->view('/user/user_add');
    }
    
    
    //news_add
    public function news_add()
    {   
        $data['data'] = $this->user_model->user_lists();
        //var_dump($data);
        $this->load->view('/user/news_add',$data);
    }
    
    
    public function news_lists()
    {   
        $data['data'] = $this->news_model->news_lists();
        $this->load->view('/user/news_lists',$data);
    }
    
    
    public function user_lists()
    {   
        $data['data'] = $this->user_model->user_lists();
        $this->load->view('/user/user_lists',$data);
    }
    
    
    public function user_edit($user_id='')
    {   
        $data['data'] = $this->user_model->user_edit($user_id);
        //var_dump($data);
        $this->load->view('/user/user_edit',$data);
    }
    
    
    public function user_delete($user_id='')
    {   
        $this->user_model->user_delete($user_id);
        $this->lists();
    }
    
    
    public function news_edit($news_id='')
    {   
        $data['data'] = $this->news_model->news_edit($news_id);
        //var_dump($data);
        $this->load->view('/user/news_edit',$data);
    }
    
    
    public function news_delete($news_id='')
    {   
        $this->news_model->news_delete($news_id);
        $this->lists();
    }
    
    
    //user_update
    public function user_update()
    {    
        $update = array (
        "user_id" => $this->input->get_post('user_id') ? $this->input->get_post('user_id') : ""  ,
        "user_name" => $this->input->get_post('user_name') ? $this->input->get_post('user_name') :"",
        "user_company" => $this->input->get_post('user_company') ? $this->input->get_post('user_company') :"" 
        );
    
        $this->user_model->user_update($update);
        $this->lists();//讀取lists function
    }
    
    
    //news_update
    public function news_update()
    {    
        $update = array (
        "news_id" => $this->input->get_post('news_id') ? $this->input->get_post('news_id') : ""  ,
        "news_title" => $this->input->get_post('news_title') ? $this->input->get_post('news_title') :"",
        "news_message" => $this->input->get_post('news_message') ? $this->input->get_post('news_message') :"" 
        );
    
        $this->news_model->news_update($update);
        $this->lists();//讀取lists function
    }
}
