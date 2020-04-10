<?php

class Controller_Library extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Library &raquo; Index';
		return $this->template->content = View::forge('library/index', $data);
	}

	public function action_books()
	{
		$data["subnav"] = array('books'=> 'active' );
		$this->template->title = 'Library &raquo; Books';
		return $this->template->content = View::forge('library/books', $data);
	}

}
