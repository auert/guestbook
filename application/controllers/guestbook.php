<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {
		public function add($title,$comment)
	{
		echo $title;
  echo "<br>";
        echo $comment;
	}
    public function delete($news_id)
	{
		echo $news_id;
	}
    public function edit()
	{
		
	}
}
