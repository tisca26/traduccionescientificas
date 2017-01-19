<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="promo promo-border promo-full">
    <div class="container clearfix" style="position:relative">
        <h3><?php echo trans_line('footer_llamanos');?> <span><?php echo TEL_VENTAS;?></span> , <span><?php echo CEL_VENTAS;?></span><br/><?php echo trans_line('footer_escribenos');?> <span><?php echo MAIL_VENTAS;?></span></h3>
        <span><?php echo trans_line('footer_promo_sub');?></span>
        <a href="#" class="button button-xlarge button-rounded"><?php echo trans_line('footer_contacto');?></a>
    </div>
</div>

<!-- Footer
    ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" style="padding-bottom: 80px;">

        <div class="container clearfix">

            <div class="container clearfix">

                <div class="col_half bottommargin-sm">
                    <?php echo trans_line('footer_copyright');?> <strong><?php echo ICOGNITIS_SACV;?></strong><br>
                    <div class="copyright-links"><a href="<?php echo ICOGNITIS_URL;?>">Página del desarrollador</a></div>
                </div>
                <br class="visible-xs visible-sm"/>
                <div class="col_half col_last tright">
                    <a href="tel:<?php echo CEL_VENTAS;?>"><i class="icon-phone2" style="margin-right: 5px;"></i>&nbsp;<?php echo CEL_VENTAS;?></a> <span class="middot hidden-xs hidden-sm">·</span>
                    <br class="visible-xs visible-sm"/>
                    <a href="tel:<?php echo TEL_VENTAS;?>"><i class="icon-call" style="margin-right: 5px;"></i>&nbsp;<?php echo TEL_VENTAS;?></a>
                    <br/>
                    <a href="<?php echo base_url_lang();?>contacto"><i class="icon-email3" style="margin-right: 5px;"></i>&nbsp;<?php echo MAIL_VENTAS;?></a>
                    <br/><br/>
                    <span style="margin-right:10px; color:#AAA">Change the language:</span><?php echo footer_lang_sel();?>
                </div>

            </div>
        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
<!-- #footer end -->
