<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbnome extends CI_Controller {
	//MOSTRA O FORM
	public function cadastro(){
		$this->load->view("cadastro");
	}
	//EFETUA A INSRCAO DO REGISTRO
	public function inserir(){
		$this->load->model("Usuario","usr");
		$this->load->model("UsuarioDAO","usrDAO");
		$this->usr->criar(0,$this->input->post("nm_usuario"),
						    $this->input->post("nm_completousuario"),
						    $this->input->post("ds_email"),
						    $this->input->post("ic_sexo"),
						    $this->input->post("ds_senha"),
						    $this->input->post("dt_nascimento"));
		
		$this->usrDAO->inserir($this->usr);
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}
	
	public function login(){
		$this->load->view("autentica");
	}
	
	public function update($cd=null){
		$this->db->where('cd_usuario',$cd);
		$data['usuario'] = $this->db->get('usuarios')->result();
		$this->load->view('editarusuario',$data);
	}
	
	public function update_salvar(){
		
		$cd = $this->input->post('cd_usuario');
		
		$data['nm_usuario'] = $this->input->post('nm_usuario');
		$data['nm_completousuario'] = $this->input->post('nm_completousuario');
		$data['ds_email'] = $this->input->post('ds_email');
		$data['ds_senha'] = $this->input->post('ds_senha');
		$data['ic_sexo'] = $this->input->post('ic_sexo');
		$data['dt_nascimento'] = $this->input->post('dt_nascimento');
		
		$this->db->where('cd_usuario',$cd);
		$this->db->update('usuarios',$data);
		
		redirect('https://php-yolatengo.c9users.io/ci/cadastrousuario');
	}
	
	public function MostraUsuario(){
		$this->load->model('Usuario');
    	$data['usuario'] = $this->Usuario->get_usuario();
    	/*var_dump($data);*/
    	$this->load->view("editarusuario",$data);
	}
	
	public function autentica(){

		$this->load->model("Usuario","usr");
		$this->usr->criar(0,$this->input->post("nm_usuario"),"","","",$this->input->post("ds_senha"),"");
		
						  /*$cd_usuario,$nm_usuario,$nm_completousuario,$ds_email,$ic_sexo,$ds_senha,$dt_nascimento*/
		
		if($this->usr->estaAutenticado()){
			echo "Está autenticado";
		}else{
			echo "Autenticação necessária";
		}
	}
}
