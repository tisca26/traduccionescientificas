<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="top-bar" class="visible-xs visible-sm">

    <div>

        <!-- Top Links
        ============================================= -->
        <div class="top-links">
            <ul class="sf-js-enabled clearfix" style="touch-action: pan-y; padding: 0 5px;">
                <?php echo top_lang_sel();?>
                <li class="<?php echo $menu_root === '' ? 'current' : ''; ?>"><a href="<?php echo base_url_lang();?>"><?php echo trans_line('menu_inicio');?></a></li>
                <li class="<?php echo $menu_root === 'servicios' ? 'current' : ''; ?>"><a href="<?php echo base_url_lang();?>servicios"><?php echo trans_line('menu_servicios');?></a></li>
                <li class="<?php echo $menu_root === 'prueba' ? 'current' : ''; ?>"><a href="<?php echo base_url_lang();?>prueba"><?php echo trans_line('menu_prueba');?></a></li>
                <li class="<?php echo $menu_root === 'contacto' ? 'current' : ''; ?>"><a href="<?php echo base_url_lang();?>contacto"><?php echo trans_line('menu_contacto');?></a></li>
            </ul>
        </div><!-- .top-links end -->

    </div>

</div>

<!-- Header
============================================= -->
<header id="header" class="sticky-style-2">

    <div class="container clearfix">

        <div id="primary-menu-trigger" class="hidden-xs"><i class="icon-reorder"></i></div>

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="<?php echo base_url_lang(); ?>" class="retina-logo">
                <img src="<?php echo cdn_assets(); ?>assets/images/logo-transscience-extendido-2x.png" alt="<?php echo NOMBRE;?> - Logo">
            </a><a href="<?php echo base_url_lang(); ?>" class="standard-logo">
                <img src="<?php echo cdn_assets(); ?>assets/images/logo-transscience-extendido.png" alt="<?php echo NOMBRE;?> - Logo">
            </a>
        </div><!-- #logo end -->

        <ul class="header-extras">
            <li style="padding-top:10px; height:50px;">
                <a href="<?php echo base_url_lang();?>prueba">
                    <i class="i-plain icon-edit nomargin"></i>
                    <div class="he-text">
                        <?php echo trans_line('menu_extras_prueba');?>
                        <span><?php echo trans_line('menu_extras_prueba_sub');?></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="tel:<?php echo CEL_VENTAS;?>">
                    <i class="i-plain icon-call nomargin" style="padding-top:10px;"></i>
                    <div class="he-text">
                        <?php echo trans_line('menu_extras_telefono');?>
                        <span>
                            <?php echo TEL_VENTAS;?>
                        </span>
                        <span>
                            <?php echo CEL_VENTAS;?>
                        </span>
                    </div>
                </a>
            </li>
            <li>
                <img src="<?php echo cdn_assets();?>assets/images/ata.png" style="width: auto; height: 60px;">
            </li>
        </ul>

    </div>

    <div id="header-wrap" class="hidden-xs">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

            <div class="container clearfix">

                <ul>
                    <li class="<?php echo $menu_root === '' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang();?>">
                            <div><i class="icon-home2"></i><?php echo trans_line('menu_inicio');?></div>
                        </a>
                    </li>
                    <li class="<?php echo $menu_root === 'servicios' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang();?>servicios">
                            <div><i class="icon-pencil"></i><?php echo trans_line('menu_servicios');?></div>
                        </a>
                    </li>
                    <li class="<?php echo $menu_root === 'prueba' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang();?>prueba">
                            <div><i class="icon-edit"></i><?php echo trans_line('menu_prueba');?></div>
                        </a>
                    </li>
                    <li class="<?php echo $menu_root === 'contacto' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang();?>contacto">
                            <div><i class="icon-email2"></i><?php echo trans_line('menu_contacto');?></div>
                        </a>
                    </li>
                </ul>

                <?php echo menu_lang_sel();?>
            </div>

        </nav><!-- #primary-menu end -->

    </div>
</header><!-- #header end -->
