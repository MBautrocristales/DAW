<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auto_model');
        $this->load->model('Modelo_model');
        $this->load->model('Anio_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['auto'] = $this->Auto_model->getAuto($id);
        $data['content'] = 'admin/autos/auto';
        $this->load->view('admin', $data);
    }

    public function getAuto($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['auto'] = $this->Auto_model->getAuto($id);
        $data['modelo'] = $this->Modelo_model->getModelo($id);
        $data['anio'] = $this->Anio_model->getAnio($id);
        $data['content'] = 'admin/autos/auto';
        $this->load->view('admin', $data);
    }

    public function formAuto() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/autos/formAuto';
        $this->load->view('admin', $data);
    }

    public function addAuto() {
        $marca = $this->input->post('MarcaA');

        $this->Auto_model->addAuto($marca);

        redirect('Auto/getAuto');
    }

    public function upAuto() {
        $i = $this->input->post('id');
        $marca = $this->input->post('MarcaA');
        $this->Auto_model->upAuto($i, $marca);

        redirect('Auto/getAuto');
    }

    public function formUpAuto($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['auto'] = $this->Auto_model->getAuto($id);
        $data['content'] = 'admin/autos/formUpAuto';
        $this->load->view('admin', $data);
    }

    public function delAuto($id) {
        $this->Auto_model->delAuto($id);
        redirect('Auto/getAuto');
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
