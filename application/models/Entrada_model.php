<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getEntrada($id = null){
        $this->db->select('*');
        $this->db->from('entrada');
        if($id != null){
            $this->db->where('idEntrada', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addEntrada($fechE, $cantE, $idB){
        $data=array (
            'idEntrada'=> 0,
            'FechaE'=> $fechE,
            'CantidadE'=> $cantE,
            'idBodega'=> $idB);
            
        return $this->db->insert('entrada', $data); 
    }
    
    public function upEntrada($i, $fechE, $cantE, $idB){
        $data = array(
            'FechaE'=> $fechE,
            'CantidadE'=> $cantE,
            'idBodega'=> $idB);
        $this->db->where('idEntrada', $i);
        return $this->db->update('entrada', $data);
    }
      
    public function delEntrada($id) {
        $this->db->where('idEntrada', $id);
        return $this->db->delete('entrada');
    }
    
}
