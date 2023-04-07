<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St extends CI_Controller {

	
	public function index()
	{
        $df=547;
		$this->load->model('Stm','cv');
        $st=$this->cv->dt($df);
        echo $st;
	}
    public function show($id)
    {
        $this->load->model('Stm','cv');
        $xc=$this->cv->dtx($id);
        echo $xc;
    }
}