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

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Menu generado -->
    <?php $this->menu_manager->generar_menu(); ?>
    <!-- /Menu generado -->

    <section id="page-title" class="bgcolor page-title-dark page-title-mini" style="background-image:url('<?php echo cdn_assets();?>assets/images/page-title-1.jpg'); background-position: center;">
        <div class="container clearfix">
            <h1><?php echo trans_line('servicios_title');?></h1>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">

                <div class="col_one_third">
                    <div class="feature-box fbox-rounded fbox-effect fbox-light" data-animate="fadeInRight">
                        <div class="fbox-icon">
                            <i class="icon-atom i-alt"></i>
                        </div>
                        <h3><?php echo trans_line('servicios_feature_title_1');?></h3>
                        <p><?php echo trans_line('servicios_feature_sub_1');?></p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-rounded fbox-effect fbox-light" data-animate="fadeInDown" data-delay="200">
                        <div class="fbox-icon">
                            <i class="icon-clipboard i-alt"></i>
                        </div>
                        <h3><?php echo trans_line('servicios_feature_title_2');?></h3>
                        <p><?php echo trans_line('servicios_feature_sub_2');?></p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-rounded fbox-effect fbox-light" data-animate="fadeInLeft">
                        <div class="fbox-icon">
                            <i class="icon-lab2 i-alt"></i>
                        </div>
                        <h3><?php echo trans_line('servicios_feature_title_3');?></h3>
                        <p><?php echo trans_line('servicios_feature_sub_3');?></p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-rounded fbox-effect fbox-light" data-animate="fadeInRight">
                        <div class="fbox-icon">
                            <i class="icon-user-md i-alt"></i>
                        </div>
                        <h3><?php echo trans_line('servicios_feature_title_4');?></h3>
                        <p><?php echo trans_line('servicios_feature_sub_4');?></p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-rounded fbox-effect fbox-light" data-animate="fadeInDown" data-delay="200">
                        <div class="fbox-icon">
                            <i class="icon-legal i-alt"></i>
                        </div>
                        <h3><?php echo trans_line('servicios_feature_title_5');?></h3>
                        <p><?php echo trans_line('servicios_feature_sub_5');?></p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last center">
                    <a href="<?php echo base_url_lang();?>prueba" class="button button-green button-rounded button-xlarge nomargin" data-animate="bounceIn" data-delay="1000"><?php echo trans_line('servicios_feature_boton');?></a>
                </div>
            </div>
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