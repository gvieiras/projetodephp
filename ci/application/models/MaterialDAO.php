<?php

class MaterialDAO extends CI_Model{
    
    public function inserir(MaterialMod $mat){
        $this->db->insert("material",$mat->toArray());
    }
}

?>