<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('formLogin');
    }

    public function getUsuario($id = null) {
        $data['usuario'] = $this->Usuario_model->getUsuario($id);
        $data['nombre'] = $this->session->userdata('nick');

          if ($this->session->userdata('privilegios') == 1) {
            $data['content'] = 'admin/usuarios/usuario';
            $this->load->view('admin', $data);
          }else {
            redirect('Admin');
          }
    }

    public function formUsuario() {
        $data['nombre'] = $this->session->userdata('nick');

        if ($this->session->userdata('privilegios') == 1) {
          $data['content'] = 'admin/usuarios/formUsuario';
          $this->load->view('admin', $data);
        }else {
          redirect('Admin');
        }

    }

    public function addUsuario() {

        $this->form_validation->set_rules('nombreUs','Nombre','trim|required');
        $this->form_validation->set_rules('aPaterno','Apellido Paterno','trim|required');
        $this->form_validation->set_rules('aMaterno','Apellido Materno','trim|required');
        $this->form_validation->set_rules('nick','Usuario','trim|required|is_unique[usuario.nick]');
        $this->form_validation->set_rules('password','Contraseña','trim|required');
        $this->form_validation->set_rules('privilegios','Privilegios','trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/usuarios/formUsuario';
            $this->load->view('admin', $data);
        } else {
            $n = addslashes($this->input->post('nombreUs'));
            $ap = addslashes($this->input->post('aPaterno'));
            $am = addslashes($this->input->post('aMaterno'));
            $u = addslashes($this->input->post('nick'));
            $p = addslashes($this->input->post('password'));
            $pr = addslashes($this->input->post('privilegios'));

            $this->Usuario_model->addUsuario($u, $p, $n, $ap, $am, $pr);

            redirect('Usuario/getUsuario');
        }
    }

    public function upUsuario() {

        $this->form_validation->set_rules('nombreUs','Nombre','trim|required');
        $this->form_validation->set_rules('aPaterno','Apellido Paterno','trim|required');
        $this->form_validation->set_rules('aMaterno','Apellido Materno','trim|required');
        $this->form_validation->set_rules('nick','Usuario','trim|required|is_unique[usuario.nick]');
        $this->form_validation->set_rules('password','Contraseña','trim|required');
        $this->form_validation->set_rules('privilegios','Privilegios','trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/usuarios/formUpUsuario';
            $this->load->view('admin', $data);
        } else {
            $i = addslashes($this->input->post('id'));
            $n = addslashes($this->input->post('nombreUs'));
            $ap = addslashes($this->input->post('aPaterno'));
            $am = addslashes($this->input->post('aMaterno'));
            $u = addslashes($this->input->post('nick'));
            $p = addslashes($this->input->post('password'));
            $pr = addslashes($this->input->post('privilegios'));

            $this->Usuario_model->upUsuario($i, $n, $ap, $am, $u, $p, $pr);
            redirect('Usuario/getUsuario');
        }
    }

    public function formUpUsuario($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['usuario'] = $this->Usuario_model->getUsuario($id);

        if ($this->session->userdata('privilegios') == 1) {
          $data['content'] = 'admin/usuarios/formUpUsuario';
          $this->load->view('admin', $data);
        }else {
          redirect('Admin');
        }

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

    public function  login(){
		$this->form_validation->set_error_delimiters();
		if ($this->form_validation->run('login') == FALSE) {
			$this->load->view('formLogin');
		}else{
			$n = $this->input->post('nick');
			$p = $this->input->post('password');

			// Vefiricar en la base de datos si existe el email
			$usuario = $this->Usuario_model->login($n, $p);

			if($usuario){
	            $arreglo_usuario = array(
                'idUsuario' => $usuario->idUsuario,
                'nombreUs' => $usuario->nombreUs,
                'aPaterno' => $usuario->aPaterno,
                'aMaterno' => $usuario->aMaterno,
                'password' => $usuario->password,
                'nick' => $usuario->nick,
                'privilegios' => $usuario->privilegios,
                'autentificado' => TRUE
	        );
	        $this->session->set_userdata($arreglo_usuario);
	        redirect('Usuario/logueado');

	        }  else {

	        	//$this->session->set_flashdata('mensaje','El usuario contraseña es incorrecto');
	            redirect('Usuario/index');
	        }
		}
  }

    public function logueadoasdsd() {
            $data['content'] = 'admin/logueado';
            $this->load->view('admin', $data);
    }

    public function logueado() {
        if($this->session->userdata('autentificado')){
          //$data['content'] = 'admin/logueado';
          //$this->load->view('admin', $data);
            redirect('Admin');
            //$this->load->view('admin/plantilla', $data);
            //redirect('Frontend');
        }else{
            redirect('Micontrolador/index');
        }
    }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        $this->session->sess_destroy();
        redirect('Micontrolador/index');
    }
}
