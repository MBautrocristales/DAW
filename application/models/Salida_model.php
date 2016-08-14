<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getSalida($id = null){
        $this->db->select('*');
        $this->db->from('salida, bodega');
        $this->db->where('salida.idBodega = bodega.idBodega');
        if($id != null){
            $this->db->where('idSalida', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addSalida($fechS, $cantS, $idB){
        $data=array (
            'idSalida'=> 0,
            'Fechas'=> $fechS,
            'Cantidads'=> $cantS,
            'idBodega'=> $idB);

        return $this->db->insert('salida', $data);
    }

    public function upSalida($i, $fechS, $cantS, $idB){
        $data = array(
            'FechaS'=> $fechS,
            'CantidadS'=> $cantS,
            'idBodega'=> $idB);
        $this->db->where('idSAlida', $i);
        return $this->db->update('salida', $data);
    }

    public function delSalida($id) {
        $this->db->where('idSalida', $id);
        return $this->db->delete('salida');
    }

    public function generalXML() {
        $this->load->dbutil();
        $sql = $this->db->get('salida');

        $config = array(
            'root' => "Salidas",
            'element' => 'salida',
            'newline' => "\n",
            'tab' => "\t"
        );

        $xml = $this->dbutil->xml_from_result($sql, $config);
        return $xml;
    }

    public function generarXLS(){
      //obtener nombres de los campos de la tabla
      $fields = $this->db->field_data('salida');
      //SELECT * FROM estados;
      $query = $this->db->get('salida');
      //Regresar un arreglo asociativo con los nombres de
      //los campos y los datos de los registros
      return array("fields"=> $fields, "query" => $query);

    }
}
