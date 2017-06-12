<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialCon extends CI_Controller {
	
	public function inserir(){
		$cd_artista = $this->input->post('cd_artista');
		$this->load->model("MaterialMod","mat");
		$this->load->model("MaterialDAO","matDAO");
		$this->mat->criar($cd_artista,0,
							$this->input->post("nm_material"),
						    $this->input->post("ic_tipo"),
						    $this->input->post("ds_genero"),
						    $this->input->post("dt_ano"));
		
		$this->matDAO->inserir($this->mat);
		$id = $this->db->insert_id();
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}
	
	public function excluir(){
		$cd = $this->input->post('cd_material');
		$this->db->where('cd_material',$cd);
		$this->db->delete('material');
		redirect('https://php-yolatengo.c9users.io/ci/artistas');
	}
	
	public function cadastroMaterial(){
		$cd_artista = $this->input->post('cd_artista');
		$this->load->model('ArtistasMod');
    	$data['artista'] = $this->ArtistasMod->getnm_artista($cd_artista);
    	/*var_dump($data);*/
		$this->load->view('cadastromaterial',$data);
	}

	public function MostrarArtista(){
		$this->load->model('ArtistasMod');
    	$data['artista'] = $this->ArtistasMod->getnm_artista();
    	/*var_dump($data);*/
    	$this->load->view("cadastromaterial", $data);
	}
	
	public function MostrarMaterial(){
		$this->load->model('MaterialMod');
    	$data['artista'] = $this->ArtistasMod->getnm_material();
    	/*var_dump($data);*/
    	$this->load->view("cadastromaterial", $data);
	}

}
