<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('formLogin');
    }

    public function getUsuario($id = null) {
        $data['usuario'] = $this->Usuario_model->getUsuario($id);
        $data['nombre'] = $this->session->userdata('nick');

        $data['content'] = 'admin/usuarios/usuario';
        $this->load->view('admin', $data);
    }

    public function formUsuario() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/usuarios/formUsuario';
        $this->load->view('admin', $data);
    }

    public function addUsuario() {
        $n = addslashes($this->input->post('nombreUs'));
        $ap = addslashes($this->input->post('aPaterno'));
        $am = addslashes($this->input->post('aMaterno'));
        $u = addslashes($this->input->post('nick'));
        $p = addslashes($this->input->post('password'));
        $pr = addslashes($this->input->post('privilegios'));

        $this->Usuario_model->addUsuario($u, $p, $n, $ap, $am, $pr);

        redirect('Usuario/getUsuario');
    }

    public function upUsuario() {
        $i = $this->input->post('id');
        $n = $this->input->post('nombreUs');
        $ap = $this->input->post('aPaterno');
        $am = $this->input->post('aMaterno');
        $u = $this->input->post('nick');
        $p = $this->input->post('password');
        $pr = $this->input->post('privilegios');


        $this->Usuario_model->upUsuario($i, $u, $p, $n, $ap, $am, $pr);

        redirect('Usuario/getUsuario');
    }

    public function formUpUsuario($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['usuario'] = $this->Usuario_model->getUsuario($id);


        $data['content'] = 'admin/usuarios/formUpUsuario';
        $this->load->view('admin', $data);
    }

    public function delUsuario($id) {
        $this->Usuario_model->delUsuario($id);
        redirect('usuario/getUsuario');
//        $this->getUsuario();
    }

    public function cambiarPrivilegios($id, $privilegios) {
        $privilegios = ($privilegios == 0) ? 1 : 0;
        $this->Usuario_model->cambiarPrivilegios($id, $privilegios);
        redirect('usuario/getUsuario');
    }

    public function login() {
        $user = $this->input->post('nick');
        $pass = $this->input->post('password');
        $priv = $this->input->post('privilegios');

        // Vefiricar en la base de datos si existe el usuario
        $usuario = $this->Usuario_model->login($user, $pass, $priv);

        if ($usuario) {
            $user_array = array(
                'idUsuario' => $usuario->idUsuario,
                'nick' => $usuario->nick,
                'privilegios' => $usuario->pivilegios,
                'autentificado' => TRUE
            );
            $this->session->set_userdata($user_array);
            redirect('usuario/logueado');
        } else {
            redirect('usuario/index');
        }
    }

    public function logueado() {

        if ($this->session->userdata('autentificado')) {


            $data['nombre'] = $this->session->userdata('nick');
            $data['privilegios'] = $this->session->userdata('privilegios');
            $data['id'] = $this->session->userdata('id');
            $data['content'] = 'admin/logueado';

            $prefs['day_type'] = 'short';
            $prefs = array(
                'show_next_prev' => TRUE,
                'next_prev_url' => base_url().'index.php/Usuario/logueado/'
            );

            $this->load->library('calendar', $prefs);


            $this->load->view('admin', $data);
        } else {
            redirect('usuario/index');
        }
    }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }

}
