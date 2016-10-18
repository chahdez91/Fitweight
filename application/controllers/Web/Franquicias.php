<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicias extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
		
    	$data['titulo'] = 'Sucursales';
    	$data['estilos'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'Resources/Styles/Franquicias.css">';
		$data['scripts'] = '<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB7iLq9FCFXyRqCPfmIXSUwW-NC97SKZKg" ></script>'
		.'<script src="'.base_url().'Resources/Plugins/locationpicker/src/locationpicker.jquery.js"></script>'
		.'<script src="'.base_url().'Resources/Scripts/Franquicias.js"></script>';
				    	
    	$this->load->view('Web/Header',$data);
        $this->load->view('Web/Franquicias');
		$this->load->view('Web/Footer',$data);
    }
}
