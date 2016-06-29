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
            $this->db->where('idProducto', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addProducto($c, $m, $mod, $a,$p, $f, $po,$r,$e,$col, $pro, $t, $pl, $pm, $pp, $pi){
        $data=array (
            'idProducto'=> 0,
            'Clave'=> $c,
            'MarcaP'=> $m,
            'modelo'=> $mod,
            'anyo'=> $a,
            'rac'=> $r,
            'fila'=> $f,
            'piso'=> $p,
            'posicion'=> $po,
            'existencia'=> $e,
            'color'=> $col,
            'procedencia'=> $pro,
            'tipo'=> $t,
            'pLista'=> $pl,
            'pMayoreo'=> $pm,
            'pPublico'=> $pp,
            'pInstalado'=> $pi);
            
        
        return $this->db->insert('productos', $data); 
    }
    
    public function upProducto($i, $c, $m, $mod, $a,$p, $f, $po,$r,$e,$col, $pro, $t, $pl, $pm, $pp, $pi){
        $data = array(
            'clave'=> $c,
            'marca'=> $m,
            'modelo'=> $mod,
            'anyo'=> $a,
            'rac'=> $r,
            'fila'=> $f,
            'piso'=> $p,
            'posicion'=> $po,
            'existencia'=> $e,
            'color'=> $col,
            'procedencia'=> $pro,
            'tipo'=> $t,
            'pLista'=> $pl,
            'pMayoreo'=> $pm,
            'pPublico'=> $pp,
            'pInstalado'=> $pi);
        $this->db->where('idProducto', $i);
        return $this->db->update('productos', $data);
    }
    
    public function delProducto($id) {
        $this->db->where('idProducto', $id);
        return $this->db->delete('productos');
    }
    
}
