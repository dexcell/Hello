<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
    $name = 'Erick';
    $hello = 'Hello world';
		$this->response->body($hello.' '.$name);
	}

} // End Welcome
