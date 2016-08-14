<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tipo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tipo_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['tipo'] = $this->Tipo_model->getTipo($id);
        $data['content'] = 'admin/tipos/tipo';
        $this->load->view('admin', $data);
    }

    public function getTipo($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['tipo'] = $this->Tipo_model->getTipo($id);
        $data['content'] = 'admin/tipos/tipo';
        $this->load->view('admin', $data);
    }

    public function formTipo() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/tipos/formTipo';
        $this->load->view('admin', $data);
    }

    public function addTipo() {
        $tipo = $this->input->post('NombreT');
        $this->Tipo_model->addTipo($tipo);

        redirect('Tipo/getTipo');
    }

    public function upTipo() {
        $i = $this->input->post('id');
        $tipo = $this->input->post('NombreT');
        $this->Tipo_model->upTipo($i, $tipo);

        redirect('Tipo/getTipo');
    }

    public function formUpTipo($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['categoria'] = $this->Tipo_model->getTipo($id);


         $data['content'] = 'admin/tipos/formUpTipo';
        $this->load->view('admin', $data);
    }

    public function delTipo($id) {
        $this->Tipo_model->delTipo($id);
        redirect('Tipo/getTipo');
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
