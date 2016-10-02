<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicias extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Franquicias';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Franquicias.css">';
		$data['scripts'] = '';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Franquicias');
		$this->load->view('Web/Footer',$data);
    }
}
