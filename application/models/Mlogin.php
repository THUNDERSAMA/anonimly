<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model
{
   
    function valiX($user)
    {
       // echo('<script>console.log("hello");</script>');
       

        $sql="SELECT * FROM maskers WHERE CID='".$user."' AND DELETED='0'";  
        $query = $this->db->query($sql);
        $res = $query->result();
      //  file_put_contents("testz.txt",$sql);
        return $res;
    }
   

    /*function to use fetch the data from users table*/
    function validate($user, $pass)
    {
       // echo('<script>console.log("hello");</script>');
        $user = trim($user);
        $userv=base64_encode($user);
$pass = trim($pass);
$pass=base64_encode($user).$pass.base64_encode($user);
$hpass= hash('sha256', $pass);

        $sql="SELECT * FROM maskers WHERE MASKING_ID='".$userv."' AND M_TIMES='".$hpass."' AND DELETED='0'";  
        $query = $this->db->query($sql);
        $res = $query->result();
        file_put_contents("testz.txt",$sql);
        return $res;
    }
}