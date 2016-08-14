<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getModelo($id = null){
        $this->db->select('*');
        $this->db->from('modelo');
        if($id != null){
            $this->db->where('idModelo', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addModelo($modelA, $idA){
        $this->db->query("CALL sp_addModelo('".$modelA."','".$idA."')");
    }

    public function upModelo($i, $modelA, $idA){
        $this->db->query("CALL sp_upModelo('".$i."','".$modelA."','".$idA."')");
    }

    public function delModelo($id) {
        $this->db->where('idModelo', $id);
        return $this->db->delete('modelo');
    }

}
