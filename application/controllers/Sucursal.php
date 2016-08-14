<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sucursal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sucursal_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['sucursal'] = $this->Sucursal_model->getSucursal($id);
        $data['content'] = 'admin/sucursales/sucursal';
        $this->load->view('admin', $data);
    }

    public function getSucursal($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['sucursal'] = $this->Sucursal_model->getSucursal($id);
        $data['content'] = 'admin/sucursales/sucursal';
        $this->load->view('admin', $data);
    }

    public function formSucursal() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/sucursales/formSucursal';
        $this->load->view('admin', $data);
    }

    public function addSucursal() {

        $this->form_validation->set_rules('NombreSuc','Sucursal','trim|required|is_unique[sucursal.NombreSuc]');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/sucursales/formSucursal';
            $this->load->view('admin', $data);
        } else {
            $suc = addslashes($this->input->post('NombreSuc'));
            $this->Sucursal_model->addSucursal($suc);

            redirect('Sucursal/getSucursal');
        }
    }

    public function upSucursal() {

      $this->form_validation->set_rules('NombreSuc','Sucursal','trim|required|is_unique[sucursal.NombreSuc]');

      if ($this->form_validation->run() === FALSE) {
          $data['nombre'] = $this->session->userdata('nick');
          $data['content'] = 'admin/sucursales/formSucursal';
          $this->load->view('admin', $data);
      } else {
          $i = addslashes($this->input->post('id'));
          $suc = addslashes($this->input->post('NombreSuc'));
          $this->Sucursal_model->upSucursal($i, $suc);

          redirect('Sucursal/getSucursal');
      }
    }

    public function formUpSucursal($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['sucursal'] = $this->Sucursal_model->getSucursal($id);
        $data['content'] = 'admin/sucursales/formUpSucursal';
        $this->load->view('admin', $data);
    }

    public function delSucursal($id) {
        $this->Sucursal_model->delSucursal($id);
        redirect('Sucursal/getSucursal');
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
