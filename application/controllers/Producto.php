<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->model('Categoria_model');
        $this->load->model('Bodega_model');
        $this->load->model('Tipo_model');
        $this->load->model('Precio_model');
        $this->load->model('Caracteristica_model');
        $this->load->model('Procedencia_model');
        $this->load->model('Auto_model');
        $this->load->model('Modelo_model');
        $this->load->model('Ubicacion_model');
        $this->load->model('Usuario_model');
        $this->load->helper('form');
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('username');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/producto';
        $this->load->view('admin', $data);
    }

    public function getProducto($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/producto';
        $this->load->view('admin', $data);
    }

    public function formProducto() {
        $data['nombre'] = $this->session->userdata('username');
        //$data['producto'] = $this->Producto_model->getProducto();
        $data['categoria'] = $this->Categoria_model->getCategoria();
        $data['precio'] = $this->Precio_model->getPrecio();
        $data['caracteristica'] = $this->Caracteristica_model->getCaracteristica();
        $data['ubicacion'] = $this->Ubicacion_model->getUbicacion();
        $data['procedencia'] = $this->Procedencia_model->getProcedencia();
        $data['tipo'] = $this->Tipo_model->getTipo();
        $data['bodega'] = $this->Bodega_model->getBodega();
        $data['auto'] = $this->Auto_model->getAuto();
        $data['usuario'] = $this->Usuario_model->getUsuario();
        $data['content'] = 'admin/productos/formProducto';
        $this->load->view('admin', $data);
    }

    public function addProducto() {

        $c = $this->input->post('Clave');
        $m = $this->input->post('MarcaP');
        $idCat = $this->input->post('idCategoria');
        $idPre = $this->input->post('idPrecio');
        $idCar = $this->input->post('idCaracteristica');
        $idUbi = $this->input->post('idUbicacion');
        $idAut = $this->input->post('idAuto');
        $idPro = $this->input->post('idProcedencia');
        $idTip = $this->input->post('idTipo');
        $idBod = $this->input->post('idBodega');
        $idUsu = $this->input->post('idUsuario');

        $this->Producto_model->addProducto($c, $m, $idCat, $idPre, $idCar, $idUbi, $idAut, $idPro, $idTip, $idBod, $idUsu);

        redirect('Producto/getProducto');
    }

    public function upProducto() {
        $i = $this->input->post('id');
        $c = $this->input->post('Clave');
        $m = $this->input->post('MarcaP');
        $idCat = $this->input->post('idCategoria');
        $idPre = $this->input->post('idPrecio');
        $idCar = $this->input->post('idCaracteristica');
        $idUbi = $this->input->post('idUbicacion');
        $idAut = $this->input->post('idAuto');
        $idPro = $this->input->post('idProcedencia');
        $idTip = $this->input->post('idTipo');
        $idBod = $this->input->post('idBodega');
        $idUsu = $this->input->post('idUsuario');


        $this->Producto_model->upProducto($i, $c, $m, $idCat, $idPre, $idCar, $idUbi, $idAut, $idPro, $idTip, $idBod, $idUsu);

        redirect('Producto/getProducto');
    }

    public function formUpProducto($id = null) {
        $data['nombre'] = $this->session->userdata('username');
        $data['producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/productos/formUpProducto';
        $this->load->view('admin', $data);
    }

    public function delProducto($id) {
        $this->Producto_model->delProducto($id);
        redirect('producto/getProducto');
    }

    public function generar() {

            switch($for = $this->input->post('formato')){
                case 'xml':
                    $xml = $this->Producto_model->generalXML('producto');
                    $this->load->helper('download');
                    $nombre = 'Producto'."-".date("d_m_Y - H_i_s").'.xml';
                    force_download($nombre,$xml);
                    break;
                case 'xls':
                      $this->load->helper('mysql_to_excel');
                      to_excel($this->Producto_model->generarXLS(),'producto'."-".date("d_m_Y - H_i_s"));
                    break;
            }
            redirect('Producto/getProducto');
        }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('micontrolador/index');
    }
}
