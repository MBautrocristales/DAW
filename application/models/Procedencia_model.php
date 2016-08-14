<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procedencia_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getProcedencia($id = null){
        $this->db->select('*');
        $this->db->from('procedencia');
        if($id != null){
            $this->db->where('idProcedencia', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addProcedencia($procedencia){
      $data=array (
        'idProcedencia'=> 0,
        'NombreP'=> $procedencia);

    return $this->db->insert('procedencia', $data);
    }

    public function upProcedencia($i, $procedencia){
      $data = array(
        'NombreP'=> $procedencia);
    $this->db->where('idProcedencia', $i);
    return $this->db->update('procedencia', $data);
    }

    public function delProcedencia($id) {
        $this->db->query("CALL sp_delProcedencia('".$id."')");
    }

}
