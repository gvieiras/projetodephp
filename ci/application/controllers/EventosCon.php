<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventosCon extends CI_Controller {
	
	public function inserir(){
		$this->load->model("EventosMod","eve");
		$this->load->model("EventosDAO","eveDAO");
		$this->eve->criar(0,$this->input->post("nm_evento"),
							$this->input->post("dt_evento"),
						    $this->input->post("vl_evento"),
						    $this->input->post("ds_bandas"));
		
		$this->eveDAO->inserir($this->eve);
		$id = $this->db->insert_id();
		redirect('https://php-yolatengo.c9users.io/ci/eventos');
	}
	
	public function excluir(){
		$cd = $this->input->post('cd_evento');
		$this->db->where('cd_evento',$cd);
		$this->db->delete('eventos');
		redirect('https://php-yolatengo.c9users.io/ci/eventos');
	}
	
	public function update($cd=null){
		$this->db->where('cd_evento',$cd);
		$data['evento'] = $this->db->get('eventos')->result();
		$this->load->view('editarevento',$data);
	}
	
	public function update_salvar(){
		
		$cd = $this->input->post('cd_evento');
		
		$data['nm_evento'] = $this->input->post('nm_evento');
		$data['dt_evento'] = $this->input->post('dt_evento');
		$data['vl_evento'] = $this->input->post('vl_evento');
		$data['ds_bandas'] = $this->input->post('ds_bandas');
		
		$this->db->where('cd_evento',$cd);
		$this->db->update('eventos',$data);
		
		redirect('https://php-yolatengo.c9users.io/ci/eventos');
	}
	
	public function cadastroEvento(){
		$cd_evento = $this->input->post('cd_evento');
		$this->load->model('EventosMod');
    	$data['evento'] = $this->EventosMod->get_evento($cd_evento);
    	/*var_dump($data);*/
		$this->load->view('editarevento',$data);
	}
	
	public function MostrarEventos(){
		$this->load->model('EventosMod');
    	$data['evento'] = $this->EventosMod->get_eventos();
    	/*var_dump($data);*/
    	$this->load->view("eventos",$data);
	}
}
