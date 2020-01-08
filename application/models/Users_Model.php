<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

	public function __construct() {
		parent::__construct(); 
	}
 
    /**
     * Undocumented function
     *
     * @param [type] $email
     * @param [type] $pass
     * @param boolean $fb
     * @return void
     */
 	public function getUser($email, $pass, $fb = false) {
        $sql = "SELECT * FROM usuarios WHERE email  = '$email' AND senha = '$pass' LIMIT 1 ";

        if($fb) {
            $sql = "SELECT * FROM usuarios WHERE email  = '$email' LIMIT 1";
        }

		$query = $this->db->query($sql);

		if($query->num_rows() > 0) {
			return $query->result_array()[0];
		}

		return false;
    }
    
        /**
     * Undocumented function
     *
     * @param [type] $idLogged
     * @return void
     */
	public function getAllUsers($idLogged) {

        $sql = "SELECT usuarios.nome AS nome, 
            usuarios.email AS email, 
            usuarios.id AS id,
            usuarios.inicio AS inicio,
            usuarios.imagem AS imagem
        FROM 
            usuarios 
        WHERE 
            usuarios.id <> '$idLogged'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0) {
			return $query->result_array();
		}

		return false;
    }
    
    /**
     * Undocumented function
     *
     * @param [type] $idUser
     * @return void
     */
    public function getLastMessageUsers($idUser, $idPara) {
        $sql = "SELECT 
            DATE_FORMAT(mensagens.data_hora, '%d/%m/%Y') as data,
            mensagens.mensagem as mensagem
        FROM 
            mensagens 
        WHERE 
            mensagens.id_de = '$idUser' AND mensagens.id_para = '$idPara'
        ORDER BY 
            id DESC LIMIT 1";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0) {
			return $query->row();
		}

		return false;
    }
    
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @param [type] $start
     * @return void
     */
	public function updateWork($id, $start) {

		$this->db->set('inicio', $start);
		$this->db->where('id', $id);
		$this->db->update('usuarios');
		
		if($this->db->affected_rows() >= 0) {
			return true;
		}

		return false;
    }
    
    /**
     * Undocumented function
     *
     * @param [type] $arrayUser
     * @return void
     */
    public function insertUser($arrayUser) {
        $this->db->insert('usuarios', $arrayUser);
        
        if($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    } 
}