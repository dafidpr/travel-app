<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun extends Backend_Controller {
	
	public $mod = 'stasiun';

	public function __construct() 
	{
		parent::__construct();
		$this->lang->load('mod/'.$this->mod);
		$this->load->model('mod/stasiun_model');
	}


	public function index()
	{
		$this->meta_title(lang_line('mod_title_all'));

		if ( $this->role->i('read') ) 
		{
			if ( $this->input->is_ajax_request() ) 
			{
				if ($this->input->post('act') == 'delete')
				{
					return $this->_delete();
				}
				else
				{
					$data = array();

					foreach ($this->stasiun_model->datatable('_all_stasiun', 'data') as $val) 
					{
						// row fortmat
						$row = [];

						// checkbox
						$row[] = '<div class="text-center"><input type="checkbox" class="row_data" value="'. encrypt($val['id']) .'"></div>';
						
						$row[] = $val['id'];
						$row[] = $val['nama_stasiun'];
						$row[] = $val['nama_kota'];
						$row[] = $val['kode'];
						$row[] = $val['nama_daop'];
						$row[] = 'Kelas '.$val['kelas'];
						$row[] = ($val['status'] == 'Aktif' ? '<span class="badge badge-outline-success">'. 'Aktif' .'</span>' : '<span class="badge badge-outline-default">'. 'Non Aktif' .'</span>');
						
						// action
						$row[] = '<div class="text-center"><div class="btn-group">
								<a href="'.admin_url($this->mod.'/edit/'.$val['id']).'" class="btn btn-xs btn-white" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_edit').'"><i class="cificon licon-edit"></i></a>
								<button type="button" class="btn btn-xs btn-white delete_single" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_delete').'" data-pk="'. encrypt($val['id']) .'"><i class="cificon licon-trash-2"></i></button>
								</div></div>';

						// generate rows data
						$data[] = $row;
					}

					$this->json_output(['data' => $data, 'recordsFiltered' => $this->stasiun_model->datatable('_all_stasiun', 'count')]);
				}
			}
			else
			{
				$this->render_view('view_index');
			}
		}
		else 
		{
			$this->render_403();
		}
	}


	public function add()
	{
		$this->meta_title(lang_line('mod_title_add'));

		if ( $this->role->i('write') )
		{
			if ( $this->input->is_ajax_request() )
			{
				$this->form_validation->set_rules(array(
					array(
						'field' => 'nama_stasiun',
						'label' => lang_line('_stasiun'),
						'rules' => 'required|trim'
					),
					array(
						'field' => 'kode_stasiun',
						'label' => lang_line('_kode_stasiun'),
						'rules' => 'required|trim'
					),
					array(
						'field' => 'nama_kota',
						'label' => lang_line('_nama_kota'),
						'rules' => 'trim|required'
					),
					array(
						'field' => 'nama_daop',
						'label' => lang_line('_daop_divre'),
						'rules' => 'trim|required'
					),
					array(
						'field' => 'status',
						'label' => lang_line('_status'),
						'rules' => 'trim|required'
					),
					array(
						'field' => 'kelas',
						'label' => lang_line('_kelas'),
						'rules' => 'trim|required'
					),
				));

				if ( $this->form_validation->run() ) 
				{
					$in_kota = $this->input->post('nama_kota');
					$id_kota = ( $in_kota == '0' ? '0' : decrypt($in_kota) );
					$in_daop = $this->input->post('nama_daop');
					$id_daop = ( $in_daop == '0' ? '0' : decrypt($in_daop) );

					$data_form = array(
						'nama_stasiun'   => xss_filter($this->input->post('nama_stasiun'), 'xss'),
						'kode'   		 => xss_filter($this->input->post('kode_stasiun'), 'xss'),
						'kelas'   		 => xss_filter($this->input->post('kelas'), 'xss'),
						'status'   		 => xss_filter($this->input->post('status'), 'xss'),
						'kota_id'		 => $id_kota,
						'daop_id'		 => $id_daop
					);

					$this->stasiun_model->insert($data_form);
					$response['success'] = true;
					$this->json_output($response);
				}
				else 
				{
					$response['success'] = false;
					$response['alert']['type'] = 'error';
					$response['alert']['content'] = validation_errors();
					$this->json_output($response);
				}
			}

			else
			{
				$this->vars['kota'] = $this->stasiun_model->_all_kota();
				$this->vars['daop'] = $this->stasiun_model->_all_daop();
				$this->render_view('view_add');
			} 
		}

		else
		{
			$this->render_403();
		}
	}

	public function edit($id = 0)
	{
		$this->meta_title(lang_line('mod_title_edit'));

		if ( $this->role->i('modify') && $id > 1)
		{
			$id_stasiun = xss_filter($id);

			if ( !empty($id_stasiun) && $this->stasiun_model->cek_id($id_stasiun) == 1 ) 
			{
				if ( $this->input->is_ajax_request() ) 
				{
					$this->form_validation->set_rules(array(
						array(
							'field' => 'nama_stasiun',
							'label' => lang_line('_stasiun'),
							'rules' => 'required|trim'
						),
						array(
							'field' => 'kode_stasiun',
							'label' => lang_line('_kode_stasiun'),
							'rules' => 'required|trim'
						),
						array(
							'field' => 'nama_kota',
							'label' => lang_line('_nama_kota'),
							'rules' => 'trim|required'
						),
						array(
							'field' => 'nama_daop',
							'label' => lang_line('_daop_divre'),
							'rules' => 'trim|required'
						),
						array(
							'field' => 'status',
							'label' => lang_line('_status'),
							'rules' => 'trim|required'
						),
						array(
							'field' => 'kelas',
							'label' => lang_line('_kelas'),
							'rules' => 'trim|required'
						),
					));

					if ( $this->form_validation->run() ) 
					{
						$in_kota = $this->input->post('nama_kota');
						$id_kota = ( $in_kota == '0' ? '0' : decrypt($in_kota) );
						$in_daop = $this->input->post('nama_daop');
						$id_daop = ( $in_daop == '0' ? '0' : decrypt($in_daop) );

						$data_form = array(
							'nama_stasiun'   => xss_filter($this->input->post('nama_stasiun'), 'xss'),
							'kode'   		 => xss_filter($this->input->post('kode_stasiun'), 'xss'),
							'kelas'   		 => xss_filter($this->input->post('kelas'), 'xss'),
							'status'   		 => xss_filter($this->input->post('status'), 'xss'),
							'kota_id'		 => $id_kota,
							'daop_id'		 => $id_daop
						);

						$this->stasiun_model->update($id_stasiun, $data_form);

						$response['success'] = true;
						$response['alert']['type'] = 'success';
						$response['alert']['content'] = lang_line('form_message_update_success');
					}
					else 
					{
						$response['success'] = false;
						$response['alert']['type'] = 'error';
						$response['alert']['content'] = validation_errors();
					}

					$this->json_output($response);
				}

				else
				{
					$data = $this->stasiun_model->get_stasiun($id_stasiun);
					$this->vars['res_stasiun'] = $data;
					$this->vars['kota'] = $this->stasiun_model->_all_kota();
					$this->vars['daop'] = $this->stasiun_model->_all_daop();
					$this->render_view('view_edit');
				}
			}
			else 
			{
				$this->render_404();
			}
		}

		else
		{
			$this->render_403();
		}
	}


	private function _delete()
	{
		if ($this->role->i('delete'))
		{
			$data = $this->input->post('data');

			foreach ($data as $key)
			{
				$pk = xss_filter(decrypt($key),'sql');
				$this->stasiun_model->delete($pk);
			}

			$response['success'] = true;
			$this->json_output($response);
		} 
		else
		{
			$response['success'] = false;
			$this->json_output($response);
		}
	}
} // End Class.