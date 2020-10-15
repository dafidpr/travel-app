<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun_model extends CI_Model {

	private $_table = 't_stasiun';
	private $_column_order = array(null, 't_stasiun.id', 't_stasiun.nama_stasiun', 't_stasiun.kode', 't_kota.nama_kota', 't_stasiun.kelas', 't_stasiun.status', 't_daop.nama_daop', null);
	private $_column_search = array('t_stasiun.id', 't_stasiun.nama_stasiun', 't_stasiun.kode', 't_kota.nama_kota', 't_stasiun.kelas', 't_stasiun.status', 't_daop.nama_daop');

	public function __construct()
	{
		parent::__construct();
	}


	public function datatable($method, $type = 'data')
	{
		$result = NULL;

		if ($type === 'count')
		{
			$this->$method();
			$result = $this->db->get()->num_rows();
		}

		if ($type === 'data')
		{
			$this->$method();
			if ($this->input->post('length') != -1) 
			{
				$length = xss_filter($this->input->post('length'), 'xss');
				$start = xss_filter($this->input->post('start'), 'xss');
				$this->db->limit($length, $start);
				$query = $this->db->get();
			}
			else
			{
				$query = $this->db->get();
			}
			
			$result = $query->result_array();
		}

		return $result;
	}


	private function _all_stasiun()
	{
		$this->db->select('t_stasiun.id,t_stasiun.nama_stasiun,t_stasiun.kode,t_kota.nama_kota,t_stasiun.kelas,t_stasiun.status,t_daop.nama_daop');
		$this->db->from($this->_table);
		$this->db->join('t_kota', 't_kota.id = t_stasiun.kota_id');
		$this->db->join('t_daop', 't_daop.id = t_stasiun.daop_id');
		// $this->db->where('id >',1);

		$i = 0;	
		foreach ($this->_column_search as $item) 
		{
			if ( $this->input->post('search')['value'] )
			{
				$search_key = xss_filter($this->input->post('search')['value'], 'xss');
				$search_key = trim($search_key);
				if ( $i == 0 )
				{
					$this->db->group_start();
					$this->db->like($item, $search_key);
				}
				else
				{
					$this->db->or_like($item, $search_key);
				}

				if ( count($this->_column_search)-1 == $i ) 
				{
					$this->db->group_end(); 
				}
			}
			$i++;
		}
		
		if ( !empty($this->input->post('order')) ) 
		{
			$field = xss_filter($this->_column_order[$this->input->post('order')['0']['column']],'xss');
			$value = xss_filter($this->input->post('order')['0']['dir'],'xss');
			$this->db->order_by($field,$value);
		}
		else
		{
			$this->db->order_by('id','DESC');
		}
	}


	public function insert(array $data)
	{
		$this->db->insert($this->_table, $data);
	}


	public function update($id = 0, array $data)
	{
		if ($id > 1 && $this->cek_id($id) == 1) 
		{
			$this->db->where("BINARY id='$id'", NULL, FALSE)->update($this->_table, $data);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}


	public function delete($id = 0)
	{
		if ($id > 1 && $this->cek_id($id) == 1) 
		{
			$this->db->where('id', $id)->delete($this->_table);

			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function _all_kota(){
		return $this->db->get('t_kota')->result_array();
	}

	public function _all_daop(){
		return $this->db->get('t_daop')->result_array();
	}

	public function get_stasiun($id=0) 
	{
		$result = NULL;

		if ($this->cek_id($id)==1)
		{
			$query = $this->db->where('id', $id);
			$query = $this->db->get($this->_table);
			$result = $query->row_array();
		}

		return $result;
	}

	public function cek_id($id = 0)
	{
		$id = xss_filter($id,'xss');

		$query = $this->db->select('id');
		$query = $this->db->where("BINARY id='$id'", NULL, FALSE);
		$query = $this->db->get($this->_table);
		$result = $query->num_rows();

		return $result;
	}
} // End class.