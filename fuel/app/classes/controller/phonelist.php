<?php

class Controller_Phonelist extends Controller_Template
{

	public function action_list()
	{
		$data["subnav"] = array('list'=> 'active' );
		$this->template->title = 'Phonelist &raquo; List';
		return $this->template->content = View::forge('phonelist/list', $data);
	}

	public function action_details()
	{
		$data["subnav"] = array('details'=> 'active' );
		$this->template->title = 'Phonelist &raquo; Details';
		return $this->template->content = View::forge('phonelist/details', $data);
	}

}
