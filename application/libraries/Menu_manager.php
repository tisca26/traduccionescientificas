<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_manager
{

    private $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    function generar_menu($menu = 'menu_uno')
    {
        global $URI;
        $this->CI->cargar_idioma->carga_lang('menus/' . $menu);
        $menuCurrent = (strlen($URI->segment(1))>2)?$URI->segment(1):$URI->segment(2);
        $data['menu_root'] = str_replace(" ","-",strtolower($menuCurrent));
        $this->CI->load->view('menus/' . $menu, $data);
    }
}
?>
