<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Eventos';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Eventos.css">';
		$data['scripts'] = '';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Eventos');
		$this->load->view('Web/Footer',$data);
    }
}
