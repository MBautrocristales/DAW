<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getProducto($id = null){
        $this->db->select('*');
        $this->db->from('parabrisas');
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

}
