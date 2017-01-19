<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        set_attr_session('menu_root', 'servicios');
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('servicios/servicios_index');
        $data = array();
        $this->load->view('servicios/servicios_index', $data);
    }
}