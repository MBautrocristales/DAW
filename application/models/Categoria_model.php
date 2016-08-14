<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getCategoria($id = null){
        $this->db->select('*');
        $this->db->from('categoria');
        if($id != null){
            $this->db->where('idCategoria', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function filas(){
      $sql = $this->db->get('categorias');
      return $sql->num_rows();
  }


    public function addCategoria($nomcat, $deccat){
      $data=array (
          'idCategoria'=> 0,
          'NombreCat'=> $nomcat,
          'DescripcionCat'=> $deccat
        );

      return $this->db->insert('categoria', $data);
    }

    public function upCategoria($i, $nomcat, $deccat){
        $this->db->query("CALL sp_upCategoria('".$i."','".$nomcat."','".$deccat."')");
    }

    public function delCategoria($id) {
        $this->db->query("CALL sp_delCategoria('".$id."')");
    }

}
