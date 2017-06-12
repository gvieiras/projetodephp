<?php

class ArtistasMod extends CI_Model{
    private $cd_artista,$nm_artista, $ds_genero,$dt_formacao, $ds_LinkFacebook,$ds_LinkYoutube;
    
    public function criar($cd_artista,$nm_artista,$ds_membros,$ds_genero,$dt_formacao, $ds_LinkFacebook,$ds_LinkYoutube){
      
        $this->cd_artista = $cd_artista;
        $this->nm_artista = $nm_artista;
        $this->ds_membros = $ds_membros;
        $this->ds_genero =  $ds_genero;
        $this->dt_formacao = $dt_formacao;
        $this->ds_LinkFacebook = $ds_LinkFacebook;
        $this->ds_LinkYoutube = $ds_LinkYoutube;
       
    }

    
    public function getnm_artista($id=null){
        $this->db->select('*');
        $this->db->from('artistas');
        $this->db->where('cd_artista',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
     public function getds_genero(){
        return $this->ds_genero;
    }
    
    public function getcd_usuario(){
        return $this->cd_usuario;
    }
    
    public function getNmUltimoArtista(){
        $this->db->select('*');
        $this->db->from('artistas');
        $this->db->order_by('cd_artista','desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
      public function getdt_formacao(){
        return $this->dt_formacao;
    }

    
    public function getds_LinkFacebook(){
        return $this->ds_LinkFacebook;
    }
    
    public function getds_LinkYoutube(){
        return $this->ds_LinkYoutube;
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}

?>

