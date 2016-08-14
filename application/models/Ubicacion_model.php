<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getUbicacion($id = null){
        $this->db->select('*');
        $this->db->from('ubicacion');
        if($id != null){
            $this->db->where('idUbicacion', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addUbicacion($rac, $fil, $pis){
        $data=array (
            'idUbicacion'=> 0,
            'Rac'=> $rac,
            'Fila'=> $fil,
            'Piso'=> $pis);

        return $this->db->insert('ubicacion', $data);
    }

    public function upUbicacion($i, $rac, $fil, $pis){
        $data = array(
            'Rac'=> $rac,
            'Fila'=> $fil,
            'Piso'=> $pis);
        $this->db->where('idUbicacion', $i);
        return $this->db->update('ubicacion', $data);
    }

    public function delUbicacion($id) {
        $this->db->where('idUbicacion', $id);
        return $this->db->delete('ubicacion');
    }

}
