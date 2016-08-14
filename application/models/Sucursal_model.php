<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getSucursal($id = null){
        $this->db->select('*');
        $this->db->from('sucursal');
        if($id != null){
            $this->db->where('idSucursal', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addSucursal($suc){
      $data=array (
          'idSucursal'=> 0,
          'NombreSuc'=> $suc);

      return $this->db->insert('sucursal', $data);
    }

    public function upSucursal($i, $suc){
      $data = array(
          'NombreSuc'=> $suc);
      $this->db->where('idSucursal', $i);
      return $this->db->update('sucursal', $data);
    }

    public function delSucursal($id) {
        $this->db->query("CALL sp_delSucursal('".$id."')");
    }

}
