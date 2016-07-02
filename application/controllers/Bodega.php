<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodega extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Bodega_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['bodega'] = $this->Bodega_model->getBodega($id);
        $data['content'] = 'admin/bodegas/bodega';
        $this->load->view('admin', $data);
    }

    public function getBodega($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['bodega'] = $this->Bodega_model->getBodega($id);
        $data['content'] = 'admin/bodegas/bodega';
        $this->load->view('admin', $data);
    }

    public function formBodega() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/bodegas/formBodega';
        $this->load->view('admin', $data);
    }

    public function addBodega() {
        $feche = $this->input->post('FechaE');
        $cane = $this->input->post('CantidadE');
        $idb = $this->input->post('idBodega');

        $this->Bodega_model->addBodega($feche, $cane, $idb);

        redirect('Bodega/getBodega');
    }

    public function upBodega() {
        $i = $this->input->post('id');
        $feche = $this->input->post('FechaE');
        $cane = $this->input->post('CantidadE');
        $idb = $this->input->post('idBodega');


        $this->Bodega_model->upBodega($i, $feche, $cane, $idb);

        redirect('Bodega/getBodega');
    }

    public function formUpBodega($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['bodega'] = $this->Bodega_model->getBodega($id);


         $data['content'] = 'admin/bodegas/formUpBodega';
        $this->load->view('admin', $data);
    }

    public function delBodega($id) {
        $this->Bodega_model->delBodega($id);
        redirect('Bodega/getBodega');
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
