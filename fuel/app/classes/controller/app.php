<?php

class Controller_App extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'App &raquo; Index';
		$this->template->content = View::forge('app/index', $data);
	}

}
