<?php
class carro_model extends CI_Model{

    public function BuscarCarro(){
    return $this->db->get("carro")->result_array();

    }
}


?>