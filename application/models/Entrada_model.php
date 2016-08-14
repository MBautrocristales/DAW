<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getEntrada($id = null){
        $this->db->select('*');
        $this->db->from('entrada');
        if($id != null){
            $this->db->where('idEntrada', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addEntrada($fechE, $cantE, $idB){
        $data=array (
            'idEntrada'=> 0,
            'FechaE'=> $fechE,
            'CantidadE'=> $cantE,
            'idBodega'=> $idB);

        return $this->db->insert('entrada', $data);
    }

    public function upEntrada($i, $fechE, $cantE, $idB){
        $this->db->query("CALL sp_upEntrada('".$i."','".$fechE."','".$cantE."','".$idB."')");
    }

    public function delEntrada($id) {
        $this->db->where('idEntrada', $id);
        return $this->db->delete('entrada');
    }

    public function generalXML() {
        $this->load->dbutil();

        $sql = $this->db->get('entrada, bodega,parabrisas');


        $config = array(
            'root' => "Entradas",
            //'element' => 'entrada',
            'element' => 'bodega',
            'newline' => "\n",
            'tab' => "\t"
        );

        $xml = $this->dbutil->xml_from_result($sql, $config);
        return $xml;
    }

    public function generarXLS(){
      //obtener nombres de los campos de la tabla
      $fields = $this->db->field_data('entrada');
      //SELECT * FROM estados;
      $query = $this->db->get('entrada');
      //Regresar un arreglo asociativo con los nombres de
      //los campos y los datos de los registros
      return array("fields"=> $fields, "query" => $query);

    }

}
