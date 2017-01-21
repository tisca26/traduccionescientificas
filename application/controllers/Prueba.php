<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        set_attr_session('menu_root', 'prueba');
    }

    public function index()
    {
        $data = array('prueba'=>get_attr_session('prueba_solicitada'));
        $this->cargar_idioma->carga_lang('prueba/prueba_index');
        if(get_attr_session('prueba_solicitada')=='ok') {
            set_bootstrap_alert(trans_line('prueba_realizada'), BOOTSTRAP_ALERT_DANGER);
        }
        $this->load->view('prueba/prueba_index', $data);
    }

    public function solicitar_traduccion()
    {
        $this->cargar_idioma->carga_lang('prueba/prueba_index');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('correo', 'Correo Electrónico', 'required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required|trim|min_length[8]|numeric|max_length[15]');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required|trim|min_length[3]|max_length[600]');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if(get_attr_session('prueba_solicitada')=='ok'){
                set_bootstrap_alert(trans_line('prueba_realizada'),BOOTSTRAP_ALERT_DANGER);
                redirect('prueba');
            }
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $receptor_mensaje = $this->input->post('mensaje');
            if($this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono, $receptor_mensaje)){
                set_bootstrap_alert(trans_line('prueba_exito'), BOOTSTRAP_ALERT_SUCCESS);
                set_attr_session('prueba_solicitada','ok');
                redirect('contacto');
            }else{
                set_bootstrap_alert(trans_line('prueba_error'), BOOTSTRAP_ALERT_DANGER);
               $this->index();
            }
        }
    }

    private function _enviar_correo_a_ventas($receptor_nombre = '', $receptor_mail = '', $receptor_telefono = '', $receptor_mensaje = '')
    {
        $this->cargar_idioma->carga_lang('prueba/prueba_index');
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'kin.hosting-mexico.net';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'contacto@traduccionescientificas.com.mx'; // SMTP username
        $mail->Password = 'Contacto123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡Gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@traduccionescientificas.com.mx', 'Traducción - '.NOMBRETC);
        $mail->Subject = "Solicitud de Traducción";
        $mail->addAddress('contacto@traduccionescientificas.com.mx', NOMBRE.' - '.NOMBRETC);

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $data['receptor_mensaje'] = $receptor_mensaje;
        $cuerpo_mensaje = $this->load->view('prueba/prueba_email_ventas', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            log_message('ERROR', '--------- Error envio correo ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }
}