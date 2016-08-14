<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ubicacion_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['ubicacion'] = $this->Ubicacion_model->getUbicacion($id);
        $data['content'] = 'admin/ubicaciones/ubicacion';
        $this->load->view('admin', $data);
    }

    public function getUbicacion($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['ubicacion'] = $this->Ubicacion_model->getUbicacion($id);
        $data['content'] = 'admin/ubicaciones/ubicacion';
        $this->load->view('admin', $data);
    }

    public function formUbicacion() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/ubicaciones/formUbicacion';
        $this->load->view('admin', $data);
    }

    public function addUbicacion() {
        $rac = $this->input->post('Rac');
        $fil = $this->input->post('Fila');
        $pis = $this->input->post('Piso');

        $this->Ubicacion_model->addUbicacion($rac, $fil, $pis);

        redirect('Ubicacion/getUbicacion');
    }

    public function upUbicacion() {
        $i = $this->input->post('id');
        $rac = $this->input->post('Rac');
        $fil = $this->input->post('Fila');
        $pis = $this->input->post('Piso');


        $this->Ubicacion_model->upUbicacion($i, $rac, $fil, $pis);

        redirect('Ubicacion/getUbicacion');
    }

    public function formUpUbicacion($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['ubicacion'] = $this->Ubicacion_model->getUbicacion($id);


         $data['content'] = 'admin/ubicaciones/formUpUbicacion';
        $this->load->view('admin', $data);
    }

    public function delUbicacion($id) {
        $this->Ubicacion_model->delUbicacion($id);
        redirect('Ubicacion/getUbicacion');
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
