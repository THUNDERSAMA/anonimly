<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cookiechk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        //echo("i am in cookiechk");
        if(get_cookie('cookie_hash')==null) {
            $this->load->view('login');
          }
          else{
            $this->load->view('main');
          }
		//$this->load->database();
		
	}
	
}
