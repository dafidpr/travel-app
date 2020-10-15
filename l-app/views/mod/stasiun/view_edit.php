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
						<label><?=lang_line('_stasiun');?> <span class="text-danger">*</span></label>
						<input type="text" name="nama_stasiun" id="nama_stasiun" class="form-control" value="<?= $res_stasiun['nama_stasiun'] ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_stasiun');?> <span class="text-danger">*</span></label>
						<input type="text" name="kode_stasiun" id="kode_stasiun" class="form-control" value="<?= $res_stasiun['kode'] ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kelas');?> <span class="text-danger">*</span></label>
						<input type="text" name="kelas" id="kelas" class="form-control" value="<?= $res_stasiun['kelas'] ?>" />
						<small><i>Ex: III</i></small>
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
									$selected = ( $res_kota['id'] == $res_stasiun['kota_id'] ? 'selected': '' ); 
									echo '<option value="'. encrypt($res_kota['id']) .'" '. $selected .'>'. $res_kota['nama_kota'] .'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_daop_divre');?></label>
						<select class="select2" name="nama_daop"  data-placeholder="<?=lang_line('_daop_divre');?>">
							<option value=""><?=lang_line('_daop_divre');?></option>
							<?php
								foreach ($daop as $res_daop) {
									$selected = ( $res_daop['id'] == $res_stasiun['daop_id'] ? 'selected': '' ); 
									echo '<option value="'. encrypt($res_daop['id']) .'" '. $selected .'>'. $res_daop['nama_daop'] .'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_status');?> <span class="text-danger">*</span></label>
						<select name="status" class="select-bs">
							<option value="<?=$res_stasiun['status'];?>" style="display:none;"><?=($res_stasiun['status'] == 'Aktif' ? lang_line('_aktif') : lang_line('_non_aktif'));?></option>
							<option value="Aktif"><?=lang_line('_aktif');?></option>
							<option value="Non Aktif"><?=lang_line('_non_aktif');?></option>
						</select>
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