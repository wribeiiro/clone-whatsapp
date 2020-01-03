<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
    
    /**
     * Undocumented function
     *
     * @param [type] $idTo
     * @param [type] $idFrom
     * @return void
     */
    public function getAllMessages($idTo, $idFrom) {
        $sql = "SELECT id, id_de, id_para, mensagem, DATE_FORMAT(data_hora, '%d/%m/%Y %H:%m') as data_hora 
        FROM mensagens 
        WHERE (id_de = '$idFrom' AND id_para = '$idTo') OR (id_de = '$idTo' AND id_para = '$idFrom') ORDER BY id asc";

		$query = $this->db->query($sql);
		
		return $query->result_array();
    }

    /**
     * Undocumented function
     *
     * @param [type] $arrayMessage
     * @return void
     */
    public function insertMessages($arrayMessage) {
        $this->db->insert('mensagens', $arrayMessage);
        
        if($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    } 

    /**
     * Undocumented function
     *
     * @return void
     */
    public function deleteMessages() {
        if($this->_db->delete('mensagens')) {
            return true;
        }

        return false;
    }
}