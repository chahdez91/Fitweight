<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conocenos extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Conocenos';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Conocenos.css">';
		$data['scripts'] = '';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Conocenos');
		$this->load->view('Web/Footer',$data);
    }
}
