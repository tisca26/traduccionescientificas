<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('inicio/inicio_index');
        $data = array('menu_root','inicio');
        $this->load->view('inicio/inicio_index', $data);
    }
}