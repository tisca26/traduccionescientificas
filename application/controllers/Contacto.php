<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        set_attr_session('menu_root', 'contacto');
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $data = array();
        $this->load->view('contacto/contacto_index', $data);
    }

    public function enviar_correo()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('correo', 'Correo Electrónico', 'required|trim|valid_email');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required|trim|min_length[7]|numeric');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required|trim|min_length[10]|max_length[600]');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $receptor_mensaje = $this->input->post('mensaje');
            if($this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono, $receptor_mensaje)){
                $this->_enviar_correo_a_cliente($receptor_nombre, $receptor_mail);
                set_bootstrap_alert(trans_line('contacto_exito'), BOOTSTRAP_ALERT_SUCCESS);
                $this->index();
            }else{
                set_bootstrap_alert(trans_line('contacto_error'), BOOTSTRAP_ALERT_DANGER);
                $this->index();
            }
        }
    }

    private function _enviar_correo_a_ventas($receptor_nombre = '', $receptor_mail = '', $receptor_telefono = '', $receptor_mensaje = '')
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.traduccionescientificas.com.mx';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = '';
        $mail->Username = 'contacto@traduccionescientificas.com.mx'; // SMTP username
        $mail->Password = 'Hola123!';
        $mail->Port = 26;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡Gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@traduccionescientificas.com.mx', 'Solicitud - '.NOMBRETC);
        $mail->Subject = "Nuevo cliente";
        $mail->addAddress('contacto@traduccionescientificas.com.mx', NOMBRE.' - '.NOMBRETC);

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $data['receptor_mensaje'] = $receptor_mensaje;
        $cuerpo_mensaje = $this->load->view('contacto/contacto_email_ventas', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            log_message('ERROR', '--------- Error envio correo ventas---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }
    private function _enviar_correo_a_cliente($receptor_nombre = '', $receptor_mail = '')
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.traduccionescientificas.com.mx';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = '';
        $mail->Username = 'contacto@traduccionescientificas.com.mx'; // SMTP username
        $mail->Password = 'Hola123!';
        $mail->Port = 26;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡Gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@traduccionescientificas.com.mx', NOMBRE.' - '.NOMBRETC);
        $mail->addReplyTo('contacto@traduccionescientificas.com.mx', NOMBRE.' - '.NOMBRETC);
        $mail->Subject = trans_line('contacto_asunto');
        $mail->addAddress($receptor_mail, $receptor_nombre);

        $data['receptor_nombre'] = $receptor_nombre;
        $cuerpo_mensaje = $this->load->view('contacto/contacto_email_cliente', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            log_message('ERROR', '--------- Error envio correo cliente ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }
}