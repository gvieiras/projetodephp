<?php

class EventosDAO extends CI_Model{
    
    public function inserir(EventosMod $eve){
        $this->db->insert("eventos",$eve->toArray());
    }
    
}

?>