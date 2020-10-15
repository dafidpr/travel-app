<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-inner mg-b-90">
	<div class="d-sm-flex align-items-center justify-content-between pd-b-20">
		<div class="pageheader pd-t-20 pd-b-0">
			<div class="d-flex justify-content-between">
				<div class="clearfix">
					<div class="breadcrumb pd-0 pd-b-10 mg-0">
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_dashboard');?></a>
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_content');?></a>
						<a href="#" class="breadcrumb-item"><?=lang_line('mod_title');?></a>
						<a href="#" class="breadcrumb-item"><?=lang_line('mod_title_edit');?></a>
					</div>
					<h4 class="pd-0 mg-0 tx-20 tx-dark tx-spacing--1"><?=lang_line('mod_title_edit');?></h4>
				</div>
			</div>
		</div>
		<div class="mg-t-15">
			<button type="button" class="btn btn-sm pd-x-15 btn-white btn-uppercase" onclick="window.location='<?=admin_url($this->mod);?>'"><i data-feather="arrow-left" class="mr-2"></i><?=lang_line('button_back');?></button>
		</div>
	</div>

	<div class="card">
		<?php 
			echo form_open('','id="form_update" autocomplete="off" class="form-bordered"');
			echo form_hidden('act', 'update');
		?>
		<div class="card-body">

		<!-- title -->
		<div class="row">
			<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_bandara');?> <span class="text-danger">*</span></label>
						<input type="text" name="nama_bandara" id="nama_bandara" class="form-control" value="<?=$res_bandara['nama_bandara']?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_iata');?> <span class="text-danger">*</span></label>
						<input type="text" name="iata" id="iata" class="form-control" value="<?=$res_bandara['iata']?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_icao');?> <span class="text-danger">*</span></label>
						<input type="text" name="icao" id="icao" class="form-control" value="<?=$res_bandara['icao']?>" />
					</div>
				</div>
			</div>
			<!--/ title -->

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_nama_kota');?></label>
						<select class="select2" name="nama_kota"  data-placeholder="<?=lang_line('_nama_kota');?>">
							<option value="0"><?=lang_line('_nama_kota');?></option>
							<?php
								foreach ($kota as $res_kota) {
									$selected = ( $res_kota['id'] == $res_bandara['kota_id'] ? 'selected': '' ); 
									echo '<option value="'. encrypt($res_kota['id']) .'" '. $selected .'>'. $res_kota['nama_kota'] .'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kategori');?> <span class="text-danger">*</span></label>
						<select name="kategori" class="select-bs">
							<option value="<?=$res_bandara['kategori'];?>" style="display:none;"><?=($res_bandara['kategori'] == 'Internasional' ? lang_line('_internasional') : ($res_bandara['kategori'] == 'Domestik' ? lang_line('_domestik'): lang_line('_regional')));?></option>
							<option value="Internasional"><?=lang_line('_internasional');?></option>
							<option value="Domestik"><?=lang_line('_domestik');?></option>
							<option value="Regional"><?=lang_line('_regional');?></option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_icao');?> <span class="text-danger">*</span></label>
						<input type="text" name="kelas" id="kelas" class="form-control" value="<?=$res_bandara['kelas']?>" />
						<small><i>Ex: III</i></small>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-lg btn-primary mr-2 submit_update"><i class="fa fa-save mr-2"></i><?=lang_line('button_save');?></button>
		</div>
	</div>
	<?=form_close();?>
</div>