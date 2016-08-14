<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($id = null) {
        $data['nombre'] = $this->session->userdata('nick');
        $data['content'] = 'admin/logueado';
        $this->load->view('admin', $data);
    }
}
