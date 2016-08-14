<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caracteristica_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getCaracteristica($id = null){
        $this->db->select('*');
        $this->db->from('caracteristica');
        if($id != null){
            $this->db->where('idCaracteristica', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addCaracteristica($col){
        $this->db->query("CALL sp_addCaracteristica('".$col."')");
    }

    public function upCaracteristica($i, $col){
        $this->db->query("CALL sp_upCaracteristica('".$i."','".$col."')");
    }

    public function delCaracteristica($id) {
        $this->db->query("CALL sp_delCaracteristica('".$id."')");
    }

}
