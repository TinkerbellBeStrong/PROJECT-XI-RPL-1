<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class MY_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if(isset($_SERVER['HTTP_USER_AGENT'])){
			$user_agent = array("sqlmap","curl","bot");
			if(preg_match('/', implode('|', $user_agent) .'/i',$_SERVER['HTTP_USER_AGENT'])){
				header('HTTP/1.0 404 Not Found');
				exit();
			}
		}
	}
}