<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bandara extends Backend_Controller {
	
	public $mod = 'bandara';

	public function __construct() 
	{
		parent::__construct();
		$this->lang->load('mod/'.$this->mod);
		$this->load->model('mod/bandara_model');
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

					foreach ($this->bandara_model->datatable('_all_bandara', 'data') as $val) 
					{
						// row fortmat
						$row = [];

						// checkbox
						$row[] = '<div class="text-center"><input type="checkbox" class="row_data" value="'. encrypt($val['id']) .'"></div>';
						
						$row[] = $val['id'];
						$row[] = $val['nama_bandara'];
						$row[] = $val['nama_kota'];
						$row[] = $val['iata'];
						$row[] = $val['icao'];
						$row[] = $val['kategori'];
						$row[] = 'Kelas '.$val['kelas'];
						
						// action
						$row[] = '<div class="text-center"><div class="btn-group">
								<a href="'.admin_url($this->mod.'/edit/'.$val['id']).'" class="btn btn-xs btn-white" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_edit').'"><i class="cificon licon-edit"></i></a>
								<button type="button" class="btn btn-xs btn-white delete_single" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_delete').'" data-pk="'. encrypt($val['id']) .'"><i class="cificon licon-trash-2"></i></button>
								</div></div>';

						// generate rows data
						$data[] = $row;
					}

					$this->json_output(['data' => $data, 'recordsFiltered' => $this->bandara_model->datatable('_all_bandara', 'count')]);
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
						'field' => 'nama_bandara',
						'label' => lang_line('_bandara'),
						'rules' => 'required|trim'
					),
					array(
						'field' => 'iata',
						'label' => lang_line('_kode_iata'),
						'rules' => 'required|trim'
					),
					array(
						'field' => 'icao',
						'label' => lang_line('_kode_icao'),
						'rules' => 'trim|required'
					),
					array(
						'field' => 'kategori',
						'label' => lang_line('_kategori'),
						'rules' => 'trim|required'
					),
					array(
						'field' => 'nama_kota',
						'label' => lang_line('_nama_kota'),
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

					$data_form = array(
						'nama_bandara'   => xss_filter($this->input->post('nama_bandara'), 'xss'),
						'icao'   		 => xss_filter($this->input->post('icao'), 'xss'),
						'iata'   		 => xss_filter($this->input->post('iata'), 'xss'),
						'kategori'   	 => xss_filter($this->input->post('kategori'), 'xss'),
						'kelas'		     => xss_filter($this->input->post('kelas'), 'xss'),
						'kota_id'		 => $id_kota,
					);

					$this->bandara_model->insert($data_form);
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
				$this->vars['kota'] = $this->bandara_model->_all_kota();
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
			$id_bandara = xss_filter($id);

			if ( !empty($id_bandara) && $this->bandara_model->cek_id($id_bandara) == 1 ) 
			{
				if ( $this->input->is_ajax_request() ) 
				{
					$this->form_validation->set_rules(array(
                        array(
                            'field' => 'nama_bandara',
                            'label' => lang_line('_bandara'),
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'iata',
                            'label' => lang_line('_kode_iata'),
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'icao',
                            'label' => lang_line('_kode_icao'),
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'kategori',
                            'label' => lang_line('_kategori'),
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'nama_kota',
                            'label' => lang_line('_nama_kota'),
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

                        $data_form = array(
                            'nama_bandara'   => xss_filter($this->input->post('nama_bandara'), 'xss'),
                            'icao'   		 => xss_filter($this->input->post('icao'), 'xss'),
                            'iata'   		 => xss_filter($this->input->post('iata'), 'xss'),
                            'kategori'   	 => xss_filter($this->input->post('kategori'), 'xss'),
                            'kelas'		     => xss_filter($this->input->post('kelas'), 'xss'),
                            'kota_id'		 => $id_kota,
                        );

						$this->bandara_model->update($id_bandara, $data_form);

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
					$data = $this->bandara_model->get_bandara($id_bandara);
					$this->vars['res_bandara'] = $data;
					$this->vars['kota'] = $this->bandara_model->_all_kota();
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
				$this->bandara_model->delete($pk);
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