<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Web_Controller {

	// public $vars;
	// public $mod = 'home';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('web/home_model');
	}
	

	public function index()
	{
		$this->meta_title(get_setting('web_name').' - '.get_setting('web_description'));
		$this->vars['content'] = 'themes/travel-app/blog/index';
		$this->load->view('themes/travel-app/component/main_blog', $this->vars);
	}
} // End Class