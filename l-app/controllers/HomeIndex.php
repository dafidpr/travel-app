<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/'.FWEB.'/Kereta.php');
class HomeIndex extends Kereta {
	public function __construct()
	{
		parent::__construct();
	}
} // End Class