<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
  
  public $version = '1.1';
  
	public function action_index()
	{
    $name = 'Erick';
    $hello = 'Hello world';
		$this->response->body($hello.' '.$name);
	}
  
  public function action_login()
  {
    $username = $this->request->post('username');
    $password = $this->request->post('password');
    
    if ($username == 'dexcell' AND $password == '1234')
    {
      $this->response->body('You are now logged in');
    }
    else
    {
      die();
    }
  }
  
  public function action_register()
  {
    $register = TRUE;
    
    if ($register)  
    {
      
    }
  }
  
  public function action_logout()
  {
    $logout = TRUE;
    
    if ( ! $logout)
    {
      
    }
  }

} // End Welcome
