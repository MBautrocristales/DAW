<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function getUsuario($id = null){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('idUsuario > 0');
        if($id != null){
            $this->db->where('idUsuario', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

    public function addUsuario($u, $p, $n, $ap, $am, $pr){
//        ISERT INTO Usuario(idUsuario, username, password, email)
//                VALUE(0,$n $u, $p, $e);
        $data=array (
            'idUsuario'=> 0,
            'nombreUs'=> $n,
            'aPaterno'=> $ap,
            'aMaterno'=> $am,
            'nick'=> $u,
            'password'=> $p,
            'privilegios'=> $pr);

        return $this->db->insert('usuario', $data);
    }

    public function upUsuario($i, $u, $p, $n, $ap, $am, $pr){
        $data = array(
            'nombreUs'=> $n,
            'aPaterno'=> $ap,
            'aMaterno'=> $am,
            'nick'=> $u,
            'password'=> $p,
            'privilegios'=> $pr);
        $this->db->where('idUsuario', $i);
        return $this->db->update('usuario', $data);
    }

    public function delUsuario($id) {
        $this->db->where('idUsuario', $id);
        return $this->db->delete('usuario');
    }

     public function cambiarPrivilegios($id, $privilegios) {
        $data = array(
            'privilegios' => $privilegios
            );
        $this->db->where('idUsuario', $id);
        return $this->db->update('usuario', $data);
    }

    public function login1($user, $pass){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nick', $user);
        $this->db->where('password', $pass);

        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            //solo la primer fila que encuentra
            return $sql->row();
        }else{
            return null;
        }
    }

    public function login($n, $p){
			$this->db->select('*');
	        $this->db->from('usuario');
	        $this->db->where('nick', $n);
	        $sql=$this->db->get();

	        if ($sql->num_rows() > 0) {
		        	$this->db->select('*');
			        $this->db->from('usuario');
			        $this->db->where('nick', $n);
			        $this->db->where('password', $p);
			        $sql=$this->db->get();
			        if ($sql->num_rows() > 0) {

			        	return $sql = $sql->row();

			        } else {
			        	$this->session->set_flashdata('mensaje','La contraseña introducida es incorrecta</div>');
			        }

			} else {
				$this->session->set_flashdata('mensaje2','El usuario introducido es incorrecto</div>');
			}
}
}
