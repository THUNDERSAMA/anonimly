<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedmain extends CI_Model
{
   
   

    /*function to use fetch the data from users table*/
    function createpost($data)
    {
       // echo('<script>console.log("hello");</script>');
       // $user = trim($user);
        $query = $this->db->insert('posts',$data);
		return $query;
    }
}