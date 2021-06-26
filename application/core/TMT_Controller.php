<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TMT_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
}
/*----- Backend -----*/
class BE_Controller extends TMT_Controller {
	public function __construct() {
		parent::__construct();
	}
}
/*----- Fontend -----*/
class FE_Controller extends TMT_Controller {
	public function __construct() {
		parent::__construct();
	}
}