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
	<link rel="stylesheet" href="<?=content_url('plugins/prism/prism.css');?>"/>
	<link rel="stylesheet" href="<?=content_url('plugins/font-awesome/font-awesome.min.css');?>" type="text/css"/>
	<link rel="stylesheet" href="<?=content_url('plugins/cifireicon-feather/cifireicon-feather.min.css');?>" type="text/css"/>
	<link rel="stylesheet" href="<?=content_url('plugins/photoswipe/photoswipe.css');?>">
	<link rel="stylesheet" href="<?=content_url('plugins/photoswipe/default-skin/default-skin.css');?>"> 

    <link href="<?php echo content_url('themes/frontend/css/app.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/fontawesome/css/fontawesome-all.css')?>">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/bootstrap-datepicker/bootstrap-datetimepicker.min.css')?>">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/css/custom.css')?>">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/flatpickr.css')?>">
    <!-- <link rel="stylesheet" href="<?php //echo content_url('themes/frontend/vendor/flatpickr/dist/ie.css')?>"> -->
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/confirmDate/confirmDate.css')?>">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/monthSelect/style.css')?>">
    <link rel="stylesheet" href="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/themes/airbnb.css')?>">
	<link rel="stylesheet" href="<?=content_url('plugins/select2/select2.css');?>" type="text/css"/>
	<link rel="stylesheet" href="<?=content_url('plugins/icomoon/styles.css');?>" type="text/css"/>
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
                <a class="mr-3" href="#" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="hamburger"></i>
                </a>
                <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <?php $uri_data = $this->uri->segment(1);?>
                    <ul class="navbar-nav">
                <?php if($uri_data == ''){?>
                        <li class="nav-itema active">
                            <a class="nav-link" href="<?php echo base_url('/')?>">Kereta Api</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('pesawat')?>">Pesawat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('blog')?>">Blog</a>
                        </li>
                <?php } else if($uri_data == 'pesawat'){?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/')?>">Kereta Api</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('pesawat')?>">Pesawat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('blog')?>">Blog</a>
                        </li>
                <?php  }?>
                    </ul>
                    <ul class="navbar-nav" style="margin-left: auto;">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">Cek Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-daftar text-primary font-weight-bold" href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Banner Section -->
            <div class="bg-banner">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo site_url('l-content/uploads/')?>banner/slide-4.jpg" class="d-block banner-img">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo site_url('l-content/uploads/')?>banner/slide-6.png" class="d-block banner-img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo site_url('l-content/uploads/')?>banner/slide-1.jpg" class="d-block banner-img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo site_url('l-content/uploads/')?>banner/slide-8.jpg" class="d-block banner-img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo site_url('l-content/uploads/')?>banner/slide-9.jpg" class="d-block banner-img" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- End Banner Section -->

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
                        <h4 class="font-weight-bold text-muted pt-3">Produk</h3>
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
	<script src="<?=content_url('plugins/sticky/jquery.sticky.js');?>"></script>
	<script src="<?=content_url('plugins/prism/prism.js');?>"></script>
	<script src="<?=content_url('plugins/photoswipe/photoswipe.min.js');?>"></script>
	<script src="<?=content_url('plugins/photoswipe/photoswipe-ui-default.min.js');?>"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?=$this->CI->theme_asset('js/javascript.js');?>"></script>
    <script src="<?php echo content_url('themes/frontend/js/app.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/bootstrap-datepicker/bootstrap-datetimepicker.min.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/flatpickr.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/rangePlugin.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/confirmDate/confirmDate.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/minMaxTimePlugin.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/monthSelect/index.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/scrollPlugin.js')?>"></script>
    <script src="<?php echo content_url('themes/frontend/vendor/flatpickr/dist/plugins/weekSelect/weekSelect.js')?>"></script>
    <script src="<?=content_url('plugins/select2/select2.min.js');?>"></script>
    <script>
        // Tanggal
        var fp = flatpickr("#date_berangkat", {
            minDate: "today",
            dateFormat: "Y-m-d"
        });

        // Select 2 for rute
        function formatState (state) {
            if (!state.id) {
                return state.text;
            }
            var $state = $(
                '<span><i class="far fa-building text-primary"></i>' + state.text + '</span>'
            );
            return $state;
            };

            $(".select2").select2({
            templateResult: formatState
            });
        // Select 2 for seat qty
         $('.seat-qty').select2();
    </script>
</body>
</html>