<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
        <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="600" id="emailContainer" style="border: 1px solid #EEE;">
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailHeader">
                            <tr>
                                <td align="center" valign="top">
                                    <img src="http://demos.icognitis.com/traduccionescientificas/assets/images/logo-transscience-extendido.png" style="min-height:100px;"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <hr style="border: 1px solid #3FA8E0; width: 90%;"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="padding-bottom:20px;">
                        <table border="0" cellpadding="5" cellspacing="0" width="100%" id="emailBody" style="color: #333;">
                            <tr>
                                <td align="center" valign="top" colspan="2" style="padding:20px;">
                                    <h3 style="color: #222;"><?php echo explode(" ",$receptor_nombre)[0]; ?> desea contactarnos</h3>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                    <b>Nombre:</b>
                                </td>
                                <td align="left" valign="top">
                                    <?php echo $receptor_nombre;?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                    <b>E-mail:</b>
                                </td>
                                <td align="left" valign="top">
                                    <?php echo $receptor_mail;?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                    <b>Teléfono:</b>
                                </td>
                                <td align="left" valign="top">
                                    <?php echo $receptor_telefono;?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                    <b>Idioma:</b>
                                </td>
                                <td align="left" valign="top">
                                    <?php echo trans_line('contacto_form_idioma');?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" valign="top">
                                    <b>Mensaje</b>
                                    <p><?php echo $receptor_mensaje;?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="10" cellspacing="0" width="100%" id="emailFooter">
                            <tr>
                                <td align="center" valign="top" style="padding:0;" colspan="2">
                                    <hr style="border: 1px solid #3FA8E0; width: 90%;"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="middle" style="padding-left:30px;">
                                    <a href="http://www.traduccionescientificas.com.mx" style="color:inherit; text-decoration:none; font-size:12px;">
                                        <b>TransScience <small>Traducciones Cientificas</small></b>
                                    </a>
                                </td>
                                <td align="right" valign="top" style="padding-right:30px;">
									<span style="font-size: 12px;">
									<?php echo TEL_VENTAS;?><br/>
                                        <?php echo CEL_VENTAS;?><br/>
                                        <?php echo MAIL_VENTAS;?>
									</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>