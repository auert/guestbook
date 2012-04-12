<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function news_insert($news)
    {
        $this->db->insert('news',$news);
    }
    
    
        public function news_lists()
    {
        $this->db->select('*');
        $this->db->from('news');
        $query = $this->db->get();
        return $query;
    }
    
    
    public function news_edit($news_id='')
    {
        $edit = $this->db->query("select * from news where news_id='$news_id'");
        return $edit;
    }
    
    
    public function news_update($data=array())
    {
        $this->db->where('news_id',$data['news_id']);
        $this->db->update('news',$data);
    }
    
    
    //news_delete
    public function news_delete($news_id='')
    {   
        $this->db->where('news_id',$news_id);
        $this->db->delete('news');
    }
}