<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends Web_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('web/pesawat_model');
	}
	

	public function index()
	{
		$this->meta_title(get_setting('web_name').' - '.get_setting('web_description'));	
		$this->vars['content'] = 'themes/travel-app/pesawat/index';
		$this->vars['bandara'] = $this->pesawat_model->_all_bandara();
		$this->load->view('themes/travel-app/component/main', $this->vars);
	}
	
	public function search_rute(){
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$adult = $this->input->get('adult');
		$infant = $this->input->get('infant');
		
		$this->meta_title(get_setting('web_name').' - '.get_setting('web_description'));	
		$this->vars['content'] = 'themes/travel-app/pesawat/search';
		$this->vars['bandara'] = $this->pesawat_model->_all_bandara();
		$this->load->view('themes/travel-app/component/search', $this->vars);
	}
} // End Class