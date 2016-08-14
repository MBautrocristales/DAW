<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['modelo'] = $this->Modelo_model->getModelo($id);
        $data['content'] = 'admin/modelos/modelo';
        $this->load->view('admin', $data);
    }

    public function getModelo($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['modelo'] = $this->Modelo_model->getModelo($id);
        $data['content'] = 'admin/modelos/modelo';
        $this->load->view('admin', $data);
    }

    public function formModelo() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/modelos/formModelo';
        $this->load->view('admin', $data);
    }

    public function addModelo() {
        $modelA = $this->input->post('ModAuto');
        $idA = $this->input->post('idAuto');

        $this->Modelo_model->addModelo($modelA, $idA);

        redirect('Auto/getAuto');
    }

    public function upModelo() {
        $i = $this->input->post('id');
        $modelA = $this->input->post('ModAuto');
        $idA = $this->input->post('idAuto');


        $this->Modelo_model->upModelo($i, $modelA, $idA);

        redirect('Modelo/getModelo');
    }

    public function formUpModelo($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['entrada'] = $this->Modelo_model->getModelo($id);


         $data['content'] = 'admin/modelos/formUpModelo';
        $this->load->view('admin', $data);
    }

    public function delModelo($id) {
        $this->Modelo_model->delModelo($id);
        redirect('Modelo/getModelo');
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
