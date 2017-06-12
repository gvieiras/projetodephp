<?php

class UsuarioDAO extends CI_Model{
    
    public function inserir(Usuario $usr){
        $this->db->insert("usuarios",$usr->toArray());
    }
    
    public function verificar(Usuario $usr){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('nm_usuario', $usr->getnm_usuario() );
        $this->db->where('ds_senha', $usr->getds_senha() );
        //SELECT * FROM usuario WHERE nm_usuario= $nm_usuario AND
        //ds_senha = $ds_senha
        $query = $this->db->get();
        return $query->num_rows() == 1;
    }
}

?>git 