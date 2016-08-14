<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getMensaje($id = null){
        $this->db->select('*');
        $this->db->from('mensajes');
        if($id != null){
            $this->db->where('idMensaje', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addMensaje($nom, $t, $e, $m){
        $data=array (
            'idMensaje'=> 0,
            'nombreMen'=> $nom,
            'telefono'=> $t,
            'email'=> $e,
            'mensaje'=> $m);


        return $this->db->insert('mensajes', $data);
    }

    public function delMensaje($id) {
        $this->db->where('idMensaje', $id);
        return $this->db->delete('mensajes');
    }

    public function cambiarStatus($id, $status) {
        $data = array(
            'mStatus' => $status
            );
        $this->db->where('idMensaje', $id);
        return $this->db->update('mensajes', $data);
    }  
}
