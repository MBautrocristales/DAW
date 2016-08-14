<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getTipo($id = null){
        $this->db->select('*');
        $this->db->from('tipo');
        if($id != null){
            $this->db->where('idTipo', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addTipo($tipo){
        $this->db->query("CALL sp_addTipo('".$tipo."')");
    }

    public function upTipo($i, $tipo){
        $this->db->query("CALL sp_upTipo('".$i."','".$tipo."')");
    }

    public function delTipo($id) {
        $this->db->query("CALL sp_delTipo('".$id."')");
    }

}
