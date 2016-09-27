<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
    	$this->load->helper('url');
    	$this->load->view('Web/Header');
        $this->load->view('Web/index');
		$this->load->view('Web/Footer');
    }
}
