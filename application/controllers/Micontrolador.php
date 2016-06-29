<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Micontrolador extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['content'] = 'inicio';
        $this->load->view('plantilla', $data);
    }
    
    public function nosotros(){
        $data['content']= 'nosotros';
        $this->load->view('plantilla', $data);
    }
    
    public function instalacion(){
        $data['content']='instalacion';
        $this->load->view('plantilla', $data);
    }
    
    public function cristales(){
        $data['content']='cristales';
        $this->load->view('plantilla', $data);
    }
    
    public function noticias(){
        $data['content']='noticias';
        $this->load->view('plantilla', $data);
    }
    
    public function contacto(){
        $data['content']='contacto';
        $this->load->view('plantilla', $data);
    }
}
