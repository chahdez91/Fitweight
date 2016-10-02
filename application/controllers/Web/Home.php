<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Home';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Home.css">';
		$data['scripts'] = '<script src="'.base_url().'Resources/Scripts/Home.js"></script>';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Home');
		$this->load->view('Web/Footer',$data);
		
    }
}
