<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FE_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() 
	{
		$this->load->helper('url');
		$data["pageName"] = 'homepage';
	  	$this->load->view("fontend/layout", $data);
	}
}