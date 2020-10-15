<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat_model extends CI_Model {

    public $table_bandara = 't_bandara';

	public function __construct()
	{
		parent::__construct();
    }
    
    public function _all_bandara(){
        return $this->db->get($this->table_bandara)->result_array();
    }

} // End class.