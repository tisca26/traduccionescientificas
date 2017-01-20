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
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/colors.css" type="text/css"/>

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
            <h1><?php echo trans_line('contacto_title');?></h1>
        </div>
    </section>


    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap nopadding">
            <section class="section nomargin">
                <div class="container clearfix">

                    <div class="contact-form-result">
                        <?php echo get_bootstrap_alert(); ?>
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '</div>'); ?>
                    </div>

                    <div>
                        <?php echo form_open('contacto/enviar_correo', array('id' => 'current_form', 'class' => '')); ?>
                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="contactform-name"><?php echo trans_line('contacto_form_nombre');?>
                                <small>*</small>
                            </label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo set_value('nombre') ?>"
                                   class="required sm-form-control"/>
                        </div>

                        <div class="col_one_third">
                            <label for="contactform-email"><?php echo trans_line('contacto_form_mail');?>
                                <small>*</small>
                            </label>
                            <input type="email" id="correo" name="correo" value="<?php echo set_value('correo') ?>"
                                   class="required email sm-form-control"/>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="contactform-phone"><?php echo trans_line('contacto_form_telefono');?>
                                <small>*</small>
                            </label>
                            <input type="text" id="telefono" name="telefono" value="<?php echo set_value('telefono') ?>"
                                   class="required sm-form-control"/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="contactform-message"><?php echo trans_line('contacto_form_mensaje');?>
                                <small>*</small>
                            </label>
                            <textarea class="required sm-form-control" id="mensaje"
                                      name="mensaje" rows="7" cols="30" style="resize: vertical; max-height:400px;"><?php echo set_value('mensaje'); ?></textarea>
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin button" type="submit" id="btn_submit"
                                    name="contactform-submit" value="submit"><?php echo trans_line('contacto_form_enviar');?>
                            </button>
                        </div>

                        <?php echo form_close(); ?>
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

<script type="text/javascript">

    $(document).ready(function () {
        var form1 = $('#current_form');

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'text-danger', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                correo:{
                    required: "<?php echo trans_line('required');?>",
                    email: "<?php echo trans_line('email');?>",
                    maxlength: jQuery.validator.format("<?php echo trans_line('maxlength');?>")
                },
                nombre: {
                    required: "<?php echo trans_line('required');?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength');?>"),
                    maxlength: jQuery.validator.format("<?php echo trans_line('maxlength');?>")
                },
                telefono:{
                    required: "<?php echo trans_line('required');?>",
                    digits: "Este campo debe contener solo números del 0-9",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength');?>"),
                    maxlength: jQuery.validator.format("<?php echo trans_line('maxlength');?>")
                },
                mensaje:{
                    required: "<?php echo trans_line('required');?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength');?>"),
                    maxlength: jQuery.validator.format("<?php echo trans_line('maxlength');?>")
                }
            },
            rules: {
                nombre: {
                    minlength: 3,
                    maxlength: 40,
                    required: true
                },
                correo:{
                    email: true,
                    maxlength: 40,
                    required: true
                },
                telefono:{
                    minlength: 8,
                    maxlength: 15,
                    digits: true,
                    required: true
                },
                mensaje:{
                    required: true,
                    maxlength: 600,
                    minlength: 10
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit

            },

            errorPlacement: function (error, element) {
                if (element.is(':checkbox')) {
                    error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                } else if (element.is(':radio')) {
                    error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                } else {
                    error.insertAfter(element); // for other inputs, just perform default behavior
                }
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.sm-form-control').addClass('error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.sm-form-control').removeClass('error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.sm-form-control').removeClass('error'); // set success class to the control group
            },

            submitHandler: function (form) {
                $('#btn_submit').html("<?php echo trans_line('contacto_form_enviando');?>");
                $('#btn_submit').prop('disabled', true);
                form.submit();
            }
        });

    });

</script>

</body>
</html>
