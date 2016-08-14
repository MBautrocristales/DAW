<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Categoria_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['categoria'] = $this->Categoria_model->getCategoria($id);
        $data['content'] = 'admin/categorias/categoria';
        $this->load->view('admin', $data);
    }

    public function getCategoria($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['categoria'] = $this->Categoria_model->getCategoria();
        $data['content'] = 'admin/categorias/categoria';
        $this->load->view('admin', $data);
    }

    public function formCategoria() {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/categorias/formCategoria';
        $this->load->view('admin', $data);
    }

    public function addCategoria() {
        $nomcat = $this->input->post('NombreCat');
        $deccat = $this->input->post('DescripcionCat');

        $this->Categoria_model->addCategoria($nomcat, $deccat);

        redirect('Categoria/getCategoria');
    }

    public function upCategoria() {
        $i = $this->input->post('id');
        $nomcat = $this->input->post('NombreCat');
        $deccat = $this->input->post('DescripcionCat');


        $this->Categoria_model->upCategoria($i, $nomcat, $deccat);

        redirect('Categoria/getCategoria');
    }

    public function formUpCategoria($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['categoria'] = $this->Categoria_model->getCategoria($id);


         $data['content'] = 'admin/categorias/formUpCategoria';
        $this->load->view('admin', $data);
    }

    public function delCategoria($id) {
        $this->Categoria_model->delCategoria($id);
        redirect('categoria/getCategoria');
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
