<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language');?>">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php echo ICOGNITIS_SACV;?>"/>
    <meta name="description" content="<?php echo trans_line('metatag_desc');?>">
    <meta name="keywords" content="<?php echo trans_line('metatag_keywords');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo cdn_assets();?>assets/images/favicon-180x180.png" type="image/png">
    <link rel="icon" href="<?php echo cdn_assets();?>assets/images/favicon-192x192.png" type="image/png" sizes="192x192">
    <link rel="shortcut icon" href="<?php echo cdn_assets();?>assets/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/custom.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/colors.php" type="text/css"/>

    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag');?></title>

</head>

<body class="stretched no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Menu generado -->
        <?php $this->menu_manager->generar_menu(); ?>
        <!-- /Menu generado -->

        <!-- Slider Canvas -->
        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-effect="fade" data-autoplay="8000" data-loop="true" data-speed="1500" data-progress="true">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('<?php echo cdn_assets();?>assets/images/slider/fondo-azul.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption col_half">
                                <h2 data-caption-animate="fadeInUp"><?php echo trans_line('inicio_slider_1_titulo');?></h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo trans_line('inicio_slider_1_sub');?></p>
                            </div>
                            <div class="slider-caption slider-caption-right tright col_half col_last visible-lg visible-md">
                                <img data-caption-animate="fadeInRight" src="<?php echo cdn_assets();?>assets/images/ata_slider.png" style="height: 70px; width: auto; margin-bottom: 20px;"/>
                                <p data-caption-animate="fadeInRight" data-caption-delay="200"><?php echo trans_line('inicio_servicios_1');?></p>
                                <p data-caption-animate="fadeInRight" data-caption-delay="400"><?php echo trans_line('inicio_servicios_2');?></p>
                                <p data-caption-animate="fadeInRight" data-caption-delay="600"><?php echo trans_line('inicio_servicios_3');?></p>
                                <p data-caption-animate="fadeInRight" data-caption-delay="800"><?php echo trans_line('inicio_servicios_4');?></p>
                                <p data-caption-animate="fadeInRight" data-caption-delay="1000"><strong><?php echo trans_line('inicio_otros');?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php echo cdn_assets();?>assets/images/slider/fondo-azul-2.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp"><a href="<?php echo base_url_lang();?>prueba" style="color: #FFF"><?php echo trans_line('inicio_slider_2_titulo');?></a></h2>
                                <p data-caption-animate="fadeInDown" data-caption-delay="200"><?php echo trans_line('inicio_slider_2_sub');?></p>
                                <a data-caption-animate="bounceIn" data-caption-delay="400" href="<?php echo base_url_lang();?>prueba" class="button button-small button-rounded button-border button-light"><?php echo trans_line('inicio_slider_2_boton');?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <a href="#" data-scrollto="#uno" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

        </section>
        <!-- /Slider Canvas-->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nobottompadding">
                <div class="container clearfix bottommargin">

                    <div class="col_one_third nobottommargin" id="uno">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="<?php echo cdn_assets();?>assets/images/mision/1.jpg" alt="<?php echo trans_line('inicio_mision_title_1');?>">
                            </div>
                            <div class="fbox-desc">
                                <h3><?php echo trans_line('inicio_mision_title_1');?><span class="subtitle"><?php echo trans_line('inicio_mision_sub_1');?></span></h3>
                                <p><?php echo trans_line('inicio_mision_cont_1');?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="<?php echo cdn_assets();?>assets/images/mision/2.jpg" alt="<?php echo trans_line('inicio_mision_title_2');?>">
                            </div>
                            <div class="fbox-desc">
                                <h3><?php echo trans_line('inicio_mision_title_2');?><span class="subtitle"><?php echo trans_line('inicio_mision_sub_2');?></span></h3>
                                <p><?php echo trans_line('inicio_mision_cont_2');?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="<?php echo cdn_assets();?>assets/images/mision/3.jpg" alt="<?php echo trans_line('inicio_mision_title_3');?>">
                            </div>
                            <div class="fbox-desc">
                                <h3><?php echo trans_line('inicio_mision_title_3');?><span class="subtitle"><?php echo trans_line('inicio_mision_sub_3');?></span></h3>
                                <p><?php echo trans_line('inicio_mision_cont_3');?>
                                    <a href="<?php echo base_url_lang()?>servicios"><?php echo trans_line('inicio_mas');?></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <a href="#" data-scrollto="#dos" class="one-page-arrow" style="bottom:-30px"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
                </div>
                <section class="section nomargin">
                    <div class="container clearfix">

                        <div class="row bottommargin-sm" id="dos">

                            <div class="col-md-4 col-sm-6">

                                <div class="feature-box fbox-small fbox-plain fbox-right fbox-light topmargin" data-animate="fadeIn" data-delay="0">
                                    <div class="fbox-icon">
                                        <i class="icon-lab"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_1');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-right fbox-light topmargin" data-animate="fadeIn" data-delay="200">
                                    <div class="fbox-icon">
                                        <i class="icon-atom"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_3');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-right fbox-light topmargin" data-animate="fadeIn" data-delay="400">
                                    <div class="fbox-icon">
                                        <i class="icon-measure"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_4');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-right fbox-light topmargin" data-animate="fadeIn" data-delay="600">
                                    <div class="fbox-icon">
                                        <i class="icon-book"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_7');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-right fbox-light topmargin" data-animate="fadeIn" data-delay="800">
                                    <div class="fbox-icon">
                                        <i class="icon-files"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_9');?></h3>
                                </div>
                            </div>

                            <div class="col-md-4 hidden-sm center">
                                <img src="<?php echo cdn_assets();?>assets/images/servicios/tintero.png" alt="">
                            </div>

                            <div class="col-md-4 col-sm-6">

                                <div class="feature-box fbox-small fbox-plain fbox-light topmargin" data-animate="fadeIn" data-delay="0">
                                    <div class="fbox-icon">
                                        <i class="icon-lab2"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_2');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-light topmargin" data-animate="fadeIn" data-delay="200">
                                    <div class="fbox-icon">
                                        <i class="icon-clipboard"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_5');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-light topmargin" data-animate="fadeIn" data-delay="400">
                                    <div class="fbox-icon">
                                        <i class="icon-health"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_6');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-light topmargin" data-animate="fadeIn" data-delay="600">
                                    <div class="fbox-icon">
                                        <i class="icon-user-md"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_8');?></h3>
                                </div>
                                <div class="feature-box fbox-small fbox-plain fbox-light topmargin" data-animate="fadeIn" data-delay="800">
                                    <div class="fbox-icon">
                                        <i class="icon-book3"></i>
                                    </div>
                                    <h3><?php echo trans_line('inicio_servicios_10');?></h3>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="#" data-scrollto="#tres" class="one-page-arrow color" style="bottom:10px"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
                </section>
                <a href="<?php echo base_url_lang();?>prueba" class="button button-3d button-full center tright t300 font-primary" style="font-size:26px;">
                    <div class="container clearfix" id="tres">
                        <?php echo trans_line('inicio_prueba_promo');?>
                        <i class="icon-angle-right" style="top:3px"></i>
                    </div>
                </a>
                <section class="section nomargin nobg">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-5">
                                <div class="heading-block">
                                    <h2><?php echo trans_line('inicio_extra_title');?></h2>
                                </div>
                                <p class="lead"><?php echo trans_line('inicio_extra_cont');?></p>
                            </div>
                            <div class="col-lg-7">
                                <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                                    <img src="<?php echo cdn_assets();?>assets/images/servicios/libro.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeIn" data-delay="100" alt="Book">
                                    <img src="<?php echo cdn_assets();?>assets/images/servicios/moleculas.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp  " data-delay="400" alt="Molecula">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- #content end -->

        <!-- Footer -->
        <?php $this->cargar_elementos_manager->carga_con_lang('footers/footer_uno'); ?>
        <!-- /Footer -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/functions.js"></script>
</body>
</html>
