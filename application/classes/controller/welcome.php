<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
    $name = 'Erick';
    $hello = 'Hello world';
		$this->response->body($hello.' '.$name);
	}
  
  public function action_login()
  {
    $login = TRUE;
    
    if ($login)
    {
      
    }
  }

} // End Welcome
