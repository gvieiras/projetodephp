<?php

class Usuario extends CI_Model{
    private $cd_usuario, $nm_usuario,$nm_completousuario, $ds_email,$ic_sexo, $ds_senha,$dt_nascimento;
    
    public function criar($cd_usuario,$nm_usuario,$nm_completousuario,$ds_email,$ic_sexo,$ds_senha,$dt_nascimento){
        //parent::__construct($cd_usuario, $nome, $ds_email, $ds_senha);
        $this->cd_usuario = $cd_usuario;
        $this->nm_usuario=$nm_usuario;
        $this->nm_completousuario=$nm_completousuario;
        $this->ds_email = $ds_email;
        $this->ic_sexo = $ic_sexo;
        $this->ds_senha = $ds_senha;
        $this->dt_nascimento = $dt_nascimento;
    }

    public function estaAutenticado(){
        $this->load->model("UsuarioDAO","usrDAO");
        return $this->usrDAO->verificar($this);
    }
    
    public function get_usuario(){
        $this->db->select('*');
        $this->db->from('usuarios');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getic_sexo(){
        return $this->ic_sexo;
    }
    
    public function getDataNascimento(){
        return $this->dt_nascimento;
    }
    
    public function getnm_completousuario(){
        return $this->nm_completousuario;
    }
    
    public function getds_email(){
        return $this->ds_email;
    }
    
    public function getds_senha(){
        return $this->ds_senha;
    }
    
    public function getnm_usuario(){
       return $this->nm_usuario;
    }
    
    public function getcd_usuario(){
        return $this->cd_usuario;
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}

?>

