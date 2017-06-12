<?php

class MaterialMod extends CI_Model{
    private $cd_artista,$cd_material,$nm_material,$ic_tipo,$ds_genero, $dt_ano;
    
    public function criar($cd_artista,$cd_material,$nm_material,$ic_tipo,$ds_genero, $dt_ano){
        
        $this->cd_artista = $cd_artista;
        $this->cd_material = $cd_material;
        $this->nm_material =  $nm_material;
        $this->ic_tipo = $ic_tipo;
        $this->ds_genero = $ds_genero;
        $this->dt_ano = $dt_ano;
       
    }
    
    public function get_material($cd_artista=null){
        $this->db->select('*');
        $this->db->from('material');
        $this->db->where('cd_artista',$cd_artista);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}

?>

