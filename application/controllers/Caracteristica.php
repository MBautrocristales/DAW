<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Caracteristica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Caracteristica_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['caracteristica'] = $this->Caracteristica_model->getCaracteristica($id);
        $data['content'] = 'admin/caracteristicas/caracteristica';
        $this->load->view('admin', $data);
    }

    public function getCaracteristica($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['caracteristica'] = $this->Caracteristica_model->getCaracteristica($id);
        $data['content'] = 'admin/caracteristicas/caracteristica';
        $this->load->view('admin', $data);
    }

    public function formCaracteristica() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/caracteristicas/formCaracteristica';
        $this->load->view('admin', $data);
    }

    public function addCaracteristica() {
        $col = $this->input->post('Color');
        $this->Caracteristica_model->addCaracteristica($col);

        redirect('Caracteristica/getCaracteristica');
    }

    public function upCaracteristica() {
        $i = $this->input->post('id');
        $col = $this->input->post('Color');
        $this->Caracteristica_model->upCaracteristica($i, $col);

        redirect('Caracteristica/getCaracteristica');
    }

    public function formUpCaracteristica($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['caracteristica'] = $this->Caracteristica_model->getCaracteristica($id);


         $data['content'] = 'admin/caracteristicas/formUpCaracteristica';
        $this->load->view('admin', $data);
    }

    public function delCaracteristica($id) {
        $this->Caracteristica_model->delCaracteristica($id);
        redirect('Caracteristica/getCaracteristica');
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
