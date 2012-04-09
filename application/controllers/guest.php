<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {
		public function _con(){
	
  
}
	
		public function add()
	{
  $this->load->view(guest/add)
	}
    public function edit($id)
	{
		echo $id;
	}
  
}

?>