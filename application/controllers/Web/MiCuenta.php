<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiCuenta extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Mi Cuenta';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/MiCuenta.css">';
		$data['scripts'] = '';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/MiCuenta');
		$this->load->view('Web/Footer',$data);
    }
}
