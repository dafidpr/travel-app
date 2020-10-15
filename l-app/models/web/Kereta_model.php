<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta_model extends CI_Model {

    public $table_stasiun = 't_stasiun';
    public $table_kota = 't_kota';

	public function __construct()
	{
		parent::__construct();
    }
    
    public function _all_stasiun(){
        return $this->db->get($this->table_stasiun)->result_array();
    }

} // End class.