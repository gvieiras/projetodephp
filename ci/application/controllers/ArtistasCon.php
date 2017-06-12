<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtistasCon extends CI_Controller {
	
	public function inserir(){
		$this->load->model("ArtistasMod","art");
		$this->load->model("ArtistasDAO","artDAO");
		$this->art->criar(0,$this->input->post("nm_artista"),
							$this->input->post("ds_membros"),
						    $this->input->post("ds_genero"),
						    $this->input->post("dt_formacao"),
						    $this->input->post("ds_LinkFacebook"),
						    $this->input->post("ds_LinkYoutube"));
		
		$this->artDAO->inserir($this->art);
		$id = $this->db->insert_id();
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}
	
	public function update($cd=null){
		$this->db->where('cd_artista',$cd);
		$data['artista'] = $this->db->get('artistas')->result();
		$this->load->view('cadastromaterial',$data);
	}
	
	public function update_salvar(){
		
		$cd = $this->input->post('cd_artista');
		
		$data['nm_artista'] = $this->input->post('nm_artista');
		$data['ds_membros'] = $this->input->post('ds_membros');
		$data['ds_genero'] = $this->input->post('ds_genero');
		$data['dt_formacao'] = $this->input->post('dt_formacao');
		$data['ds_LinkFacebook'] = $this->input->post('ds_LinkFacebook');
		$data['ds_LinkYoutube'] = $this->input->post('ds_LinkYoutube');
		
		$this->db->where('cd_artista',$cd);
		$this->db->update('artistas',$data);
		
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}
	
	public function excluir(){
		$cd = $this->input->post('cd_artista');
		$this->db->where('cd_artista',$cd);
		$this->db->delete('artistas');
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}

	public function MostrarArtistas(){
		$this->load->model('ArtistasMod');
    	$data['artista'] = $this->ArtistasMod->getNmUltimoArtista();
    	/*var_dump($data);*/
    	$this->load->view("artistasNovo",$data);
    	
	}

	
	public function MostrarUmArtista(){
		$this->load->model('ArtistasMod');
    	$data['artista'] = $this->ArtistasMod->getnm_artista();
    	/*var_dump($data);*/
    	$this->load->view("paginaArtista", $data);
	}
	
}
