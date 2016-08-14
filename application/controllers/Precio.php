<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Precio_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['precio'] = $this->Precio_model->getPrecio($id);
        $data['content'] = 'admin/precios/precio';
        $this->load->view('admin', $data);
    }

    public function getPrecio($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['precio'] = $this->Precio_model->getPrecio($id);
        $data['content'] = 'admin/precios/precio';
        $this->load->view('admin', $data);
    }

    public function formPrecio() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/precios/formPrecio';
        $this->load->view('admin', $data);
    }

    public function addPrecio() {
        $p_l = $this->input->post('P_Lista');
        $p_m = $this->input->post('P_Mayoreo');

        $this->Precio_model->addPrecio($p_l, $p_m);

        redirect('Precio/getPrecio');
    }

    public function upPrecio() {
        $i = $this->input->post('id');
        $p_l = $this->input->post('P_Lista');
        $p_m = $this->input->post('P_Mayoreo');

        $this->Precio_model->upPrecio($i, $p_l, $p_m);

        redirect('Precio/getPrecio');
    }

    public function formUpPrecio($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['precio'] = $this->Precio_model->getPrecio($id);
        $data['content'] = 'admin/precios/formUpPrecio';
        $this->load->view('admin', $data);
    }

    public function delPrecio($id) {
        $this->Precio_model->delPrecio($id);
        redirect('Precio/getPrecio');
//        $this->getUsuario();
    }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
