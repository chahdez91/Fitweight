<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicias extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Sucursales';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Franquicias.css">';
		$data['scripts'] = '<script src="'.base_url().'Resources/Scripts/Franquicias.js"></script>'.'<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7iLq9FCFXyRqCPfmIXSUwW-NC97SKZKg&callback=initMap" async defer></script>';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Franquicias');
		$this->load->view('Web/Footer',$data);
    }
}
