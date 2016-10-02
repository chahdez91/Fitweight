<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Contacto';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Contacto.css">';
		$data['scripts'] = '';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Contacto');
		$this->load->view('Web/Footer',$data);
    }
}
