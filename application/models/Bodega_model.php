<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodega_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getBodega($id = null){
        $this->db->select('*');
        $this->db->from('bodega');
        if($id != null){
            $this->db->where('idBodega', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addBodega($stock, $preP, $preI){
        $data=array (
            'idBodega'=> 0,
            'Stock'=> $stock,
            'P_Publico'=> $preP,
            'P_Instalado'=> $preI);

        return $this->db->insert('bodega', $data);
    }

    public function upBodega($i, $stock, $preP, $preI){
        $data = array(
            'Stock'=> $stock,
            'P_Publico'=> $preP,
            'P_Instalado'=> $preI);
        $this->db->where('idBodega', $i);
        return $this->db->update('bodega', $data);
    }

    public function delBodega($id) {
        $this->db->where('idBodega', $id);
        return $this->db->delete('bodega');
    }

}
