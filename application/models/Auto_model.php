<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//Auto
    public function getAuto($id = null){
        $this->db->select('*');
        $this->db->from('auto');
        if($id != null){
            $this->db->where('idAuto', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addAuto($marca){
        $this->db->query("CALL sp_addAuto('".$marca."')");
    }

    public function upAuto($i, $marca){
        $this->db->query("CALL sp_upAuto('".$i."','".$marca."')");
    }

    public function delAuto($id) {
        $this->db->query("CALL sp_delAuto('".$id."')");
    }

}
