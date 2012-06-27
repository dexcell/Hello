<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
  
  public $version = '1.0';
  
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
      $name = 'Login User';
      if ( ! $name)
      {
        $name = 'Erick';
      }
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
