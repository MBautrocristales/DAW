<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    //Productos

    public function getProducto($id = null){
        $this->db->select('*');
        $this->db->from('parabrisas ,categoria, bodega, tipo, precio, caracteristica, ubicacion, procedencia, auto, modelo');
        $this->db->where('parabrisas.idCategoria = categoria.idCategoria');
        $this->db->where('parabrisas.idBodega = bodega.idBodega');
        $this->db->where('parabrisas.idTipo = tipo.idTipo');
        $this->db->where('parabrisas.idPrecio = precio.idPrecio');
        $this->db->where('parabrisas.idCaracteristica = caracteristica.idCaracteristica');
        $this->db->where('parabrisas.idUbicacion = ubicacion.idUbicacion');
        $this->db->where('parabrisas.idProcedencia = procedencia.idProcedencia');
        $this->db->where('parabrisas.idAuto = auto.idAuto');
        $this->db->where('parabrisas.idAuto = modelo.idAuto');
        if($id != null){
            $this->db->where('idParabrisas', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addProducto($c, $m, $idCat, $idPre, $idCar, $idUbi, $idAut, $idPro, $idTip, $idBod, $idUsu){
        $data=array (
            'idParabrisas'=> 0,
            'Clave'=> $c,
            'MarcaP'=> $m,
            'idCategoria'=> $idCat,
            'idPrecio'=> $idPre,
            'idCaracteristica'=> $idCar,
            'idUbicacion'=> $idUbi,
            'idAuto'=> $idAut,
            'idProcedencia'=> $idPro,
            'idTipo'=> $idTip,
            'idBodega'=> $idBod,
            'idUsuario'=> $idUsu);

        return $this->db->insert('parabrisas', $data);
    }

    public function upProducto($i, $c, $m, $idCat, $idPre, $idCar, $idUbi, $idAut, $idPro, $idTip, $idBod, $idUsu){
        $data = array(
          'Clave'=> $c,
          'MarcaP'=> $m,
          'idCategoria'=> $idCat,
          'idPrecio'=> $idPre,
          'idCaracteristica'=> $idCar,
          'idUbicacion'=> $idUbi,
          'idAuto'=> $idAut,
          'idProcedencia'=> $idPro,
          'idTipo'=> $idTip,
          'idBodega'=> $idBod,
          'idUsuario'=> $idUsu);
        $this->db->where('idParabrisas', $i);
        return $this->db->update('parabrisas', $data);
    }

    public function delProducto($id) {
        $this->db->where('idParabrisas', $id);
        return $this->db->delete('parabrisas');
    }

    public function generalXML() {
        $this->load->dbutil();

        $sql = $this->db->get('producto');


        $config = array(
            'root' => "Producto",
            //'element' => 'entrada',
            'element' => 'producto',
            'newline' => "\n",
            'tab' => "\t"
        );

        $xml = $this->dbutil->xml_from_result($sql, $config);
        return $xml;
    }

    public function generarXLS(){
      //obtener nombres de los campos de la tabla
      $fields = $this->db->field_data('producto');
      //SELECT * FROM estados;
      $query = $this->db->get('producto');
      //Regresar un arreglo asociativo con los nombres de
      //los campos y los datos de los registros
      return array("fields"=> $fields, "query" => $query);

    }
}
