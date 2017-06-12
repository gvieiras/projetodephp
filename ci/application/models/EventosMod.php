<?php

class EventosMod extends CI_Model{
    private $cd_evento,$nm_evento,$dt_evento,$vl_evento,$ds_bandas;
    
    public function criar($cd_evento,$nm_evento,$dt_evento,$vl_evento,$ds_bandas){
      
        $this->cd_evento = $cd_evento;
        $this->nm_evento = $nm_evento;
        $this->dt_evento = $dt_evento;
        $this->vl_evento = $vl_evento;
        $this->ds_bandas = $ds_bandas;
       
    }
    
    public function get_evento($id=null){
        $this->db->select('*');
        $this->db->from('eventos');
        $this->db->where('cd_evento',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_eventos(){
        $this->db->select('*');
        $this->db->from('eventos');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}

?>

