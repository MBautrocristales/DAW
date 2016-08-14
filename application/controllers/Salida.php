<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Salida_model');
        $this->load->model('Bodega_model');
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

        $this->form_validation->set_rules('FechaS','Fecha','trim|required|max_length[30]');
        $this->form_validation->set_rules('CantidadS','Cantidad','trim|required|max_length[20]');
        $this->form_validation->set_rules('idBodega','id Bodega','trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/salidas/formSalida';
            $this->load->view('admin', $data);
        } else {
          $fechs = addslashes($this->input->post('FechaS'));
          $cans = addslashes($this->input->post('CantidadS'));
          $idb = addslashes($this->input->post('idBodega'));


          $this->Salida_model->addSalida($fechs, $cans, $idb);
          redirect('Salida/getSalida');
        }
    }

      public function upSalida() {

        $this->form_validation->set_rules('FechaS','Fecha','trim|required|max_length[30]');
        $this->form_validation->set_rules('CantidadS','Cantidad','trim|required|max_length[20]');
        $this->form_validation->set_rules('idBodega','id Bodega','trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['nombre'] = $this->session->userdata('nick');
            $data['content'] = 'admin/salidas/formSalida';
            $this->load->view('admin', $data);
        } else {
          $i = addslashes($this->input->post('id'));
          $fechs = addslashes($this->input->post('FechaS'));
          $cans = addslashes($this->input->post('CantidadS'));
          $idb = addslashes($this->input->post('idBodega'));


          $this->Salida_model->upSalida($i, $fechs, $cans, $idb);
          redirect('Salida/getSalida');
        }
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

    public function generar() {

            switch($for = $this->input->post('formato')){
                case 'xml':
                    $xml = $this->Salida_model->generalXML('salida');
                    $this->load->helper('download');
                    $nombre = 'Salida'."-".date("d_m_Y - H_i_s").'.xml';
                    force_download($nombre,$xml);
                    break;
                case 'xls':
                      $this->load->helper('mysql_to_excel');
                      to_excel($this->Salida_model->generarXLS(),'salida'."-".date("d_m_Y - H_i_s"));
                    break;
            }
            redirect('entrada/getSalida');
        }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
