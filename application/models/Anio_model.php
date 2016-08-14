<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anio_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getAnio($id = null){
        $this->db->select('*');
        $this->db->from('anio');
        if($id != null){
            $this->db->where('idAnio', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addAnio($anioa, $idM, $idA){
        $this->db->query("CALL sp_addAnio('".$anioa."','".$idM."','".$idA."')");
    }

    public function upAnio($i, $anioa, $idM, $idA){
        $this->db->query("CALL sp_upAnio('".$i."','".$anioa."','".$idM."','".$idA."')");
    }

    public function delAnio($id) {
        $this->db->where('idAnio', $id);
        return $this->db->delete('anio');
    }

}
