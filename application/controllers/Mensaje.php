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

        //$pages=5; //Registros a mostrar por página
        //$this->load->library('pagination');
        //$config['base_url'] = base_url() . 'index.php/Mensaje/getMensaje';
        //$config['total_rows'] = $this->Mensaje_model->filas();
        //$config['per_page'] = $pages;
        //$this->pagination->initialize($config);

        $data['nombre'] = $this->session->userdata('nombreMen');
        $data['mensaje'] = $this->Mensaje_model->getMensaje($id);
        $data['content'] = 'admin/mensajes/mensaje';
        $this->load->view('admin', $data);
    }

    public function addMensaje() {

        $this->form_validation->set_rules('nombreMen','Nombre','trim|required|max_length[30]');
        $this->form_validation->set_rules('telefono','Telefono','trim|required|max_length[20]');
        $this->form_validation->set_rules('email','aasas','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('mensaje','hdhdhd','trim|required|max_length[500]');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'contacto';
            $this->load->view('plantilla', $data);
        } else {
          $n = addslashes($this->input->post('nombreMen'));
          $t = addslashes($this->input->post('telefono'));
          $e = addslashes($this->input->post('email'));
          $m = addslashes($this->input->post('mensaje'));

            $this->Mensaje_model->addMensaje($n, $t, $e, $m);

            redirect('micontrolador/index');
        }
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
