<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('username');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/producto';
        $this->load->view('admin', $data);
    }

    public function getProducto($id = null) {
        $data['nombre'] = $this->session->userdata('username');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/producto';
        $this->load->view('admin', $data);
    }

    public function formProducto() {
        $data['nombre'] = $this->session->userdata('username');
        $data['content'] = 'admin/productos/formProducto';
        $this->load->view('admin', $data);
    }

    public function addProducto() {
        $c = $this->input->post('clave');
        $m = $this->input->post('marca');
        $mod = $this->input->post('modelo');
        $a = $this->input->post('anyo');
        $r = $this->input->post('rac');
        $f = $this->input->post('fila');
        $p = $this->input->post('piso');
        $po = $this->input->post('posicion');
        $e = $this->input->post('existencia');
        $col = $this->input->post('color');
        $pro = $this->input->post('procedencia');
        $t = $this->input->post('tipo');
        $pl = $this->input->post('pLista');
        $pm = $this->input->post('pMayoreo');
        $pp = $this->input->post('pPublico');
        $pi = $this->input->post('pInstalado');
        
        $this->Producto_model->addProducto($c, $m, $mod, $a,$p, $f, 
                $po,$r,$e, $col, $pro, $t, $pl, $pm, $pp, $pi);

        redirect('Producto/getProducto');
    }

    public function upProducto() {
        $i = $this->input->post('id');
        $c = $this->input->post('clave');
        $m = $this->input->post('marca');
        $mod = $this->input->post('modelo');
        $a = $this->input->post('anyo');
        $r = $this->input->post('rac');
        $f = $this->input->post('fila');
        $p = $this->input->post('piso');
        $po = $this->input->post('posicion');
        $e = $this->input->post('existencia');
        $col = $this->input->post('color');
        $pro = $this->input->post('procedencia');
        $t = $this->input->post('tipo');
        $pl = $this->input->post('pLista');
        $pm = $this->input->post('pMayoreo');
        $pp = $this->input->post('pPublico');
        $pi = $this->input->post('pInstalado');


        $this->Producto_model->upProducto($i, $c, $m, $mod, $a,$p, $f, 
                $po,$r,$e,$col, $pro, $t, $pl, $pm, $pp, $pi);

        redirect('Producto/getProducto');
    }

    public function formUpProducto($id = null) {
        $data['nombre'] = $this->session->userdata('username');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/formUpProducto';
        $this->load->view('admin', $data);
    }

    public function delProducto($id) {
        $this->Producto_model->delProducto($id);
        redirect('producto/getProducto');
    }
    
    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
