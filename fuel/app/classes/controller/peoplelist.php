<?php

class Controller_Peoplelist extends Controller_Template
{

	public function action_list()
	{
		$data["subnav"] = array('list'=> 'active' );
		$this->template->title = 'Peoplelist &raquo; List';
		$this->template->content = View::forge('peoplelist/list', $data);
	}

	public function action_details()
	{
		$data["subnav"] = array('details'=> 'active' );
		$this->template->title = 'Peoplelist &raquo; Details';
		$this->template->content = View::forge('peoplelist/details', $data);
	}

}
