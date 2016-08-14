<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Procedencia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Procedencia_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['procedencia'] = $this->Procedencia_model->getProcedencia($id);
        $data['content'] = 'admin/procedencias/procedencia';
        $this->load->view('admin', $data);
    }

    public function getProcedencia($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['procedencia'] = $this->Procedencia_model->getProcedencia($id);
        $data['content'] = 'admin/procedencias/procedencia';
        $this->load->view('admin', $data);
    }

    public function formProcedencia() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/procedencias/formProcedencia';
        $this->load->view('admin', $data);
    }

    public function addProcedencia() {

      $this->form_validation->set_rules('NombreP','Procedencia','trim|required|is_unique[procedencia.NombreP]');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/procedencias/formProcedencia';
            $this->load->view('admin', $data);
        } else {
            $procedencia = addslashes($this->input->post('NombreP'));
            $this->Procedencia_model->addProcedencia($procedencia);

            redirect('Procedencia/getProcedencia');
        }
    }

    public function upProcedencia() {

      $this->form_validation->set_rules('NombreP','Procedencia','trim|required|is_unique[procedencia.NombreP]');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/procedencias/formProcedencia';
            $this->load->view('admin', $data);
        } else {
            $i = addslashes($this->input->post('id'));
            $procedencia = addslashes($this->input->post('NombreP'));
            $this->Procedencia_model->upProcedencia($i, $procedencia);

            redirect('Procedencia/getProcedencia');
        }
    }

    public function formUpProcedencia($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['procedencia'] = $this->Procedencia_model->getProcedencia($id);
         $data['content'] = 'admin/procedencias/formUpProcedencia';
        $this->load->view('admin', $data);
    }

    public function delProcedencia($id) {
        $this->Procedencia_model->delProcedencia($id);
        redirect('Procedencia/getProcedencia');
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
