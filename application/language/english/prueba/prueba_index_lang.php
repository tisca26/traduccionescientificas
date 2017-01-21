<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['language'] = 'en-US';
$lang['title_tag'] = NOMBRE.' - Trial';
$lang['metatag_desc'] = 'We are a team of transaltors focused in the translation, edition and '.
    'review of Medical Sciences, Pharmaceutical and Research specialized documents.';
$lang['metatag_keywords'] = '';

$lang['prueba_title'] = 'Translation trial';

$lang['prueba_form_nombre'] = 'Full name';
$lang['prueba_form_telefono'] = 'Telephone number';
$lang['prueba_form_mail'] = 'E-mail';
$lang['prueba_form_asunto'] = 'Subject';
$lang['prueba_form_mensaje'] = 'Text to translate (600 characters maximum)';
$lang['prueba_form_idioma'] = 'Inglés';
$lang['prueba_form_enviar'] = 'Send';
$lang['prueba_form_enviando'] = 'Sending...';

$lang['prueba_exito'] = 'Your request was succesfully sent, you will receive an e-mail with the translation as soon as posible.<br/>'.
                        'Please check your <strong>Junk Mail</strong> if you cannot find your translated text.';
$lang['prueba_realizada'] = 'You have already requested a trial, we will send you the translated text soon.'.
                            '<br/><strong>Please check your Junk Mail if you cannot find your translated text.</strong>';
$lang['prueba_error'] = 'An <strong>error</strong> has ocurred, please try again.'.
                        '<br/>If the problem still exists <strong>make contact with us</strong>'.
                        ', send your request directly to <strong>'.MAIL_VENTAS.'</strong>';
$lang['prueba_html_error'] = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡Gracias!';

//Form validation JS
$lang['minlength'] = 'This field must be at least {0} characters length';
$lang['maxlength'] = 'This field must have a maximum of {0} characters';
$lang['required'] = 'This field is required';
$lang['email'] = 'This field must be an e-mail';
$lang['digits'] = 'This field allows only numbers 0-9';

?>