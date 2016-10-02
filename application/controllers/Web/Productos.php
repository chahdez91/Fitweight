<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Productos';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Productos.css">';
		$data['scripts'] = '<script src="'.base_url().'Resources/Scripts/Productos.js"></script>';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Productos');
		$this->load->view('Web/Footer',$data);
    }
}
