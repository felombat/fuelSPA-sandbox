<?php

class Controller_Api_V1 extends Controller_Rest
{
	public $format = 'json';
	
	public function before()
	{
		parent::before();

		$this->response->set_header('Access-Control-Allow-Origin','*');

	}

	public function get_books()
	{
		$data["subnav"] = array('books'=> 'active' );

		$data = file_get_contents("https://api.itbook.store/1.0/search/angularjs");
 
		$this->response->status = 200;
		$this->response->body =  is_array($data) ? json_encode($data) : $data ;
	}

	public function get_onews(){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://newsapi.org/v2/top-headlines",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"country: de", 
 				"apiKey: b714f12698014cf4aac6cd930ab5ffae"
			),
		));

		$data = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		$this->response->status = 200;
		$this->response->body =  is_array($data) ? json_encode($data) : $data ;

	}

	public function get_news()
	{
		$data["subnav"] = array('books'=> 'active' );

		//$data = file_get_contents("https://api.itbook.store/1.0/search/angularjs");

		$data = shell_exec("curl http://newsapi.org/v2/top-headlines -G \
			-d country=de \
			-d apiKey=b714f12698014cf4aac6cd930ab5ffae"); 
 
		$this->response->status = 200;
		$this->response->body =  is_array($data) ? json_encode($data) : $data ;
	}

	public function action_monkeys()
	{
		$data["subnav"] = array('monkeys'=> 'active' );
		$this->template->title = 'Api v1 &raquo; Monkeys';
		$this->template->content = View::forge('api/v1/monkeys', $data);
	}

	public function action_persons()
	{
		$data["subnav"] = array('persons'=> 'active' );
		$this->template->title = 'Api v1 &raquo; Persons';
		$this->template->content = View::forge('api/v1/persons', $data);
	}

	public function action_projects()
	{
		$data["subnav"] = array('projects'=> 'active' );
		$this->template->title = 'Api v1 &raquo; Projects';
		$this->template->content = View::forge('api/v1/projects', $data);
	}

}
