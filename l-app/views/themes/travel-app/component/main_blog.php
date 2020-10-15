<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?=$this->meta_title;?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="<?=$this->meta_description;?>"/>
	<meta name="keywords" content="<?=$this->meta_keywords;?>"/>
	<meta name="author" content="<?=get_setting('web_author');?>"/>
	<meta http-equiv="Copyright" content="<?=get_setting('web_name');?>"/>
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="language" content="english"/>
	<meta name="revisit-after" content="7"/>
	<meta name="webcrawlers" content="all"/>
	<meta name="rating" content="general"/>
	<meta name="spiders" content="all"/>
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=favicon();?>"/>
	<!-- metasocial -->
	<?php $this->load->view('meta_social'); ?>
	<!-- stylesheet -->
	<link rel="stylesheet" href="<?=content_url('plugins/bootstrap/css/bootstrap.min.css');?>"/>
	<link rel="stylesheet" href="<?=content_url('plugins/prism/prism.css');?>"/>
	<link rel="stylesheet" href="<?=content_url('plugins/font-awesome/font-awesome.min.css');?>" type="text/css"/>
	<link rel="stylesheet" href="<?=content_url('plugins/cifireicon-feather/cifireicon-feather.min.css');?>" type="text/css"/>
	<link rel="stylesheet" href="<?=content_url('plugins/photoswipe/photoswipe.css');?>">
	<link rel="stylesheet" href="<?=content_url('plugins/photoswipe/default-skin/default-skin.css');?>"> 
	<link rel="stylesheet" href="<?=$this->CI->theme_asset('css/style-custom.css');?>" />
	<link rel="stylesheet" href="<?php echo content_url('themes/frontend/css/custom.css')?>">
	<link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/fontawesome/css/fontawesome-all.css')?>">
	<!-- script -->
	<script src="<?=content_url('plugins/jquery/jquery3.4.1.min.js');?>"></script>
	<!-- google analytics -->
	<?=google_analytics();?>
	
</head>
<body>
<div class="wrapper">
	<div class="main">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <a class="navbar-brand" href="<?=site_url();?>" title="<?=get_setting('web_name');?>">
                <img src="<?=favicon('logo');?>" alt="" width="170">
            </a>
            <a class="" href="#" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="hamburger"></i>
            </a>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            <?php 
                // Load web menu.
                $this->CI->load_menu(
                                        $menu_group = 2, 
                                        $ul = 'class="navbar-nav"', 
                                        $ul_li = 'class="nav-item"', 
                                        $ul_li_a ='class="nav-link"', 
                                        $ul_li_a_ul = 'class="dropdown-menu"'
                                    )
                    ?>
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item">
                    <?=form_open(site_url('search'),'class="form-inline"');?>
                    <div class="input-group input-group-navbar">
                        <input type="text" name="kata" class="form-control" placeholder="Search..."/ autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    <?=form_close();?>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Content -->
        <?php $this->load->view($content);?>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mr-5">
                    <img src="<?=favicon('logo');?>" alt="" width="230"> <br>
                        <p class="pt-4 text-justify"><?=$this->meta_description;?></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-3">
                        <h6 class="font-weight-bold text-muted pt-3">Produk</h6>
                            <ul class="list-inline pt-3">
                                <li class="list-inline-item">
                                    <a href="<?php echo base_url('pesawat')?>" class="footer-info text-muted text-decoration-none">Pesawat</a>
                                </li>
                            </ul>
                            <ul class="list-inline pt-1">
                                <li class="list-inline-item">
                                    <a href="<?php echo base_url('/')?>" class="footer-info text-muted text-decoration-none">Kereta</a>
                                </li>
                            </ul>
                    </div>
                    <div class="collg-5 col-md-5 col-sm-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen></iframe>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div style="margin-left: auto; margin-right: auto;">
                        <a href="#" class="text-secondary"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="pl-2 text-secondary"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="#" class="pl-2 text-secondary"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="pl-2 text-secondary"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
                <p class="text-center pt-4"><?=copyright();?></p>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</div>

	<!-- script -->
	<script src="<?=content_url('plugins/popper/popper.js');?>"></script>
	<script src="<?=content_url('plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?=content_url('plugins/sticky/jquery.sticky.js');?>"></script>
	<script src="<?=content_url('plugins/prism/prism.js');?>"></script>
	<script src="<?=content_url('plugins/photoswipe/photoswipe.min.js');?>"></script>
	<script src="<?=content_url('plugins/photoswipe/photoswipe-ui-default.min.js');?>"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?=$this->CI->theme_asset('js/javascript.js');?>"></script>
</body>
</html>