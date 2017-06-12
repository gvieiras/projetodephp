<?php

class ArtistasDAO extends CI_Model{
    
    public function inserir(ArtistasMod $art){
        $this->db->insert("artistas",$art->toArray());
    }

}

?>