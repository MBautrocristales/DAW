<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Salida_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['salida'] = $this->Salida_model->getSalida($id);
        $data['content'] = 'admin/salidas/salida';
        $this->load->view('admin', $data);
    }

    public function getSalida($id = null) {
         $data['nombre'] = $this->session->userdata('nick');
        $data['salida'] = $this->Salida_model->getSalida($id);
        $data['content'] = 'admin/salidas/salida';
        $this->load->view('admin', $data);
    }
    
    public function formSalida() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/salidas/formSalida';
        $this->load->view('admin', $data);
    }

    public function addSalida() {
        $fechs = $this->input->post('FechaS');
        $cans = $this->input->post('CantidadS');
        $idb = $this->input->post('idBodega');
        
        $this->Salida_model->addSalida($fechs, $cans, $idb);

        redirect('Salida/getSalida');
    }
    
      public function upSalida() {
        $i = $this->input->post('id');
        $fechs = $this->input->post('FechaS');
        $cans = $this->input->post('CantidadS');
        $idb = $this->input->post('idBodega');


        $this->Salida_model->upSalida($i, $fechs, $cans, $idb);

        redirect('Salida/getSalida');
    }

    public function formUpSalida($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['salida'] = $this->Salida_model->getSalida($id);
        

         $data['content'] = 'admin/salidas/formUpSalida';
        $this->load->view('admin', $data);
    }


    public function delSalida($id) {
        $this->Salida_model->delSalida($id);
        redirect('salida/getSalida');
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
