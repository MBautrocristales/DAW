<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Anio_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['anio'] = $this->Anio_model->getAnio($id);
        $data['content'] = 'admin/anios/anio';
        $this->load->view('admin', $data);
    }

    public function getAnio($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['anio'] = $this->Anio_model->getAnio($id);
        $data['content'] = 'admin/anios/anio';
        $this->load->view('admin', $data);
    }

    public function formAnio() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/anios/formAnio';
        $this->load->view('admin', $data);
    }

    public function addAnio() {
        $anioa = $this->input->post('AnioAuto');
        $idM = $this->input->post('idModelo');
        $idA = $this->input->post('idAuto');

        $this->Anio_model->addAnio($anioa, $idM, $idA);

        redirect('Anio/getAnio');
    }

    public function upAnio() {
        $i = $this->input->post('id');
        $anioa = $this->input->post('AnioAuto');
        $idM = $this->input->post('idModelo');
        $idA = $this->input->post('idAuto');


        $this->Anio_model->upAnio($i, $anioa, $idM, $idA);

        redirect('Anio/getAnio');
    }

    public function formUpEntrada($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['anio'] = $this->Anio_model->getAnio($id);


         $data['content'] = 'admin/anios/formUpAnio';
        $this->load->view('admin', $data);
    }

    public function delAnio($id) {
        $this->Anio_model->delAnio($id);
        redirect('anio/getAnio');
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
