<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precio_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getPrecio($id = null){
        $this->db->select('*');
        $this->db->from('precio');
        if($id != null){
            $this->db->where('idPrecio', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addPrecio($p_l, $p_m){
        $data=array (
            'idPrecio'=> 0,
            'P_Lista'=> $p_l,
            'P_Mayoreo'=> $p_m);

        return $this->db->insert('precio', $data);
    }

    public function upPrecio($i, $p_l, $p_m){
        $data = array(
            'P_Lista'=> $p_l,
            'P_Mayoreo'=> $p_m);
        $this->db->where('idPrecio', $i);
        return $this->db->update('precio', $data);
    }

    public function delPrecio($id) {
        $this->db->where('idPrecio', $id);
        return $this->db->delete('precio');
    }

}
