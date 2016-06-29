<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getSalida($id = null){
        $this->db->select('*');
        $this->db->from('salida');
        if($id != null){
            $this->db->where('idSalida', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addSalida($fechS, $cantS, $idB){
        $data=array (
            'idSalida'=> 0,
            'Fechas'=> $fechS,
            'Cantidads'=> $cantS,
            'idBodega'=> $idB);
            
        return $this->db->insert('salida', $data); 
    }
     
    public function upSalida($i, $fechS, $cantS, $idB){
        $data = array(
            'FechaS'=> $fechS,
            'CantidadS'=> $cantS,
            'idBodega'=> $idB);
        $this->db->where('idSAlida', $i);
        return $this->db->update('salida', $data);
    }
    
    public function delSalida($id) {
        $this->db->where('idSalida', $id);
        return $this->db->delete('salida');
    }
    
}
