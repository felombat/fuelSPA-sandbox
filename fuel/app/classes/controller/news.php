<?php

class Controller_News extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'News &raquo; Index';
		return $this->template->content = View::forge('news/index', $data);
	}

}
