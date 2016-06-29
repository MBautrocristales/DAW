<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Entrada_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['entrada'] = $this->Entrada_model->getEntrada($id);
        $data['content'] = 'admin/entradas/entrada';
        $this->load->view('admin', $data);
    }

    public function getEntrada($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['entrada'] = $this->Entrada_model->getEntrada($id);
        $data['content'] = 'admin/entradas/entrada';
        $this->load->view('admin', $data);
    }
    
    public function formEntrada() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/entradas/formEntrada';
        $this->load->view('admin', $data);
    }

    public function addEntrada() {
        $feche = $this->input->post('FechaE');
        $cane = $this->input->post('CantidadE');
        $idb = $this->input->post('idBodega');
        
        $this->Entrada_model->addEntrada($feche, $cane, $idb);

        redirect('Entrada/getEntrada');
    }
    
    public function upEntrada() {
        $i = $this->input->post('id');
        $feche = $this->input->post('FechaE');
        $cane = $this->input->post('CantidadE');
        $idb = $this->input->post('idBodega');


        $this->Entrada_model->upEntrada($i, $feche, $cane, $idb);

        redirect('Entrada/getEntrada');
    }

    public function formUpEntrada($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['entrada'] = $this->Entrada_model->getEntrada($id);
        

         $data['content'] = 'admin/entradas/formUpEntrada';
        $this->load->view('admin', $data);
    }

    public function delEntrada($id) {
        $this->Entrada_model->delEntrada($id);
        redirect('entrada/getEntrada');
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
