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
						<a href="#" class="breadcrumb-item"><?=lang_line('mod_title_add');?></a>
					</div>
					<h4 class="pd-0 mg-0 tx-20 tx-dark tx-spacing--1"><?=lang_line('mod_title_add');?></h4>
				</div>
			</div>
		</div>
		<div class="mg-t-15">
			<button type="button" class="btn btn-sm pd-x-15 btn-white btn-uppercase" onclick="window.location='<?=admin_url($this->mod);?>'"><i data-feather="arrow-left" class="mr-2"></i><?=lang_line('button_back');?></button>
		</div>
	</div>

	<div class="card">
		<?php 
			echo form_open('','id="form_add" class="form-bordered" autocomplete="off" ');
			echo form_hidden('act', 'add_new');
		?>
		<div class="card-body">
			<div class="row">
				
			</div>
			
			<!-- title -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_bandara');?> <span class="text-danger">*</span></label>
						<input type="text" name="nama_bandara" id="nama_bandara" class="form-control" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_iata');?> <span class="text-danger">*</span></label>
						<input type="text" name="iata" id="iata" class="form-control" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kode_icao');?> <span class="text-danger">*</span></label>
						<input type="text" name="icao" id="icao" class="form-control" />
					</div>
				</div>
			</div>
			<!--/ title -->

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_nama_kota');?> <span class="text-danger">*</span></label>
						<select name="nama_kota" class="select2 form-control" data-placeholder="<?=lang_line('_nama_kota');?>">
							<option value="" selected><?=lang_line('_nama_kota');?></option>
							<?php
								foreach ($kota as $val) {
									echo '<option value="'. encrypt($val['id']) .'">'.$val['nama_kota'].'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kategori');?> <span class="text-danger">*</span></label>
						<select name="kategori" class="select-bs form-control">
							<option value="">Pilih Kategori</option>
							<option value="Internasional"><?=lang_line('_internasional')?></option>
							<option value="Domestik"><?=lang_line('_domestik')?></option>
							<option value="Regional"><?=lang_line('_regional')?></option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label><?=lang_line('_kelas');?> <span class="text-danger">*</span></label>
						<input type="text" name="kelas" id="kelas" class="form-control" />
						<small><i>Ex : III</i></small>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="submit" class="btn btn-lg btn-primary mr-2 submit_add"><i class="cificon licon-send mr-2"></i><?=lang_line('button_submit');?></button>
		</div>
	</div>
	<?=form_close();?>
</div>