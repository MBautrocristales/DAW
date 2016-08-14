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

        $this->form_validation->set_rules('FechaE','Fecha','trim|required|max_length[30]');
        $this->form_validation->set_rules('CantidadE','Cantidad','trim|required|max_length[20]');
        $this->form_validation->set_rules('idBodega','id Bodega','trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/entradas/formEntrada';
            $this->load->view('admin', $data);
        } else {
          $feche = addslashes($this->input->post('FechaE'));
          $cane = addslashes($this->input->post('CantidadE'));
          $idb = addslashes($this->input->post('idBodega'));


            $this->Entrada_model->addEntrada($feche, $cane, $idb);
            redirect('Entrada/getEntrada');
        }
    }

    public function upEntrada() {

      $this->form_validation->set_rules('FechaE','Fecha','trim|required|max_length[30]');
      $this->form_validation->set_rules('CantidadE','Cantidad','trim|required|max_length[20]');
      $this->form_validation->set_rules('idBodega','id Bodega','trim|required');

      if ($this->form_validation->run() === FALSE) {
          $data['nombre'] = $this->session->userdata('nick');
          $data['content'] = 'contacto';
          $this->load->view('plantilla', $data);
      } else {
        $i = addslashes($this->input->post('id'));
        $feche = addslashes($this->input->post('FechaE'));
        $cane = addslashes($this->input->post('CantidadE'));
        $idb = addslashes($this->input->post('idBodega'));


          $this->Entrada_model->upEntrada($i, $feche, $cane, $idb);
          redirect('Entrada/getEntrada');
      }
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

    public function generar() {

            switch($for = $this->input->post('formato')){
                case 'xml':
                    $xml = $this->Entrada_model->generalXML('entrada');
                    $this->load->helper('download');
                    $nombre = 'Entrada'."-".date("d_m_Y - H_i_s").'.xml';
                    force_download($nombre,$xml);
                    break;
                case 'xls':
                      $this->load->helper('mysql_to_excel');
                      to_excel($this->Entrada_model->generarXLS(),'entrada'."-".date("d_m_Y - H_i_s"));
                    break;
            }
            redirect('entrada/getEntrada');
        }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
