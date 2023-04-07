<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stm extends CI_Model {

	
	public function dt($cv)
	{
        if($cv==54)
		return "rohit";
        else
        {
          return "ff";
        }
	}
    public function dtx($cv)
	{
       
          return "user".$cv;
        
	}
}