<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mensaje_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['mensaje'] = $this->Mensaje_model->getMensaje($id);
        $data['content'] = 'admin/mensajes/mensaje';
        $this->load->view('admin', $data);
        
        
    }

    public function getMensaje($id = null) {
        $data['nombre'] = $this->session->userdata('nombreMen');
        $data['mensaje'] = $this->Mensaje_model->getMensaje($id);
        $data['content'] = 'admin/mensajes/mensaje';
        $this->load->view('admin', $data);
    }

    public function addMensaje() {
        
        $n = addslashes($this->input->post('nombreMen'));
        $t = addslashes($this->input->post('telefono'));
        $e = addslashes($this->input->post('email'));
        $m = addslashes($this->input->post('mensaje'));
        
        $this->Mensaje_model->addMensaje($n, $t, $e, $m);

        redirect('micontrolador/index');
    }

    public function delMensaje($id) {
        $this->Mensaje_model->delMensaje($id);
        redirect('mensaje/getMensaje');
//        $this->getUsuario();
    }

    public function cambiarStatus($id, $status) {
        $status = ($status == 0) ? 1 : 0;
        $this->Mensaje_model->cambiarStatus($id, $status);
        redirect('mensaje/getMensaje');
    }
    
    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
