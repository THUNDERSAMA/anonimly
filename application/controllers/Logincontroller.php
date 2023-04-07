<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

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
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
       
        $this->load->model('Mlogin');
        $this->load->model('Slogin');
    }
	public function index()
	{
         //echo("i am in cookiechk");
         if(get_cookie('cookie_hash')==null) {
            $this->load->view('auth/login-page');
          }
          else{
            $Login = new MLogin();
           
           $result = $this->Mlogin->valiX(get_cookie('cookie_hash'));
           if (count($result) == 1) {
            $data = array(
                'CID' => $result[0]->CID,
                'SIID' => $result[0]->SIID,
                'IMAGES' => $result[0]->IMAGES
                
            );
            $this->session->set_userdata('auth', $data);
            $this->load->view('main');
          }
          else {
            $this->load->view('auth/login-page');
          }
        }
		//$this->load->database();
       // echo("i am in LOGINCON");
        
		//$this->load->database();
		
	}
    public function logins()
	{
       
       if (isset($this->session->userdata('auth')['SIID'])) {

        $this->load->view('main');
    } else {
      //  echo "error redirect";
        $this->load->view('auth/login-page');
    }
		
	}
    public function logout() {
        setcookie('cookie_hash', '', time() - (86400 * 365), '/'); // Delete the cookie data
        $this->session->sess_destroy(); // Destroy the session data
        $this->load->view('auth/login-page');
    }
    public function login()
	{
       // print_r($_POST);
//         //echo("i am in jhbjhcookiechk");
      // file_put_contents("testz.txt",$_POST);
// 		//$this->load->database();
	
        /* receive from ajax*/
        $username = $this->input->post('UserName');
        $Password = $this->input->post('Password');
       
        if (!isset($username) || $username == '' || $username == 'undefined') {
            echo 2;
            exit();
        }
        if (!isset($Password) || $Password == '' || $Password == 'undefined') {
           
            echo 3;
            exit();
        }
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
           
            echo 4;
            exit();
        }
         else {
          
         //}
        
           
            $Login = new MLogin();
           
           $result = $this->Mlogin->validate($username, $Password);
            if (count($result) == 1) {
                /*If everything is fine, then go here, and return 1 as output and set session*/
                $data = array(
                    'CID' => $result[0]->CID,
                    'SIID' => $result[0]->SIID,
                    'IMAGES' => $result[0]->IMAGES
                    
                );
                $this->session->set_userdata('auth', $data);
                $cookie_name = "cookie_hash";
               file_put_contents("test.txt",$this->session->userdata('auth')['CID']);
$cookie_value = $this->session->userdata('auth')['CID'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
                echo 1;
            } else {
                /*If Both Username &  Password that we recieved is invalid, go here, and return 5 as output*/
                echo 5;
            }

        
   }}
   public function emailvalid($em)
    {
        file_put_contents("testz.txt","defdfdgf");
        //print_r($_POST);
        $email=$em;
$ar= array(
    'to_email' => $email
);
$post_data=json_encode($ar);
$crl=curl_init('https://api.reacher.email/v0/check_email');
curl_setopt($crl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($crl,CURLINFO_HEADER_OUT,true);

curl_setopt($crl,CURLOPT_POST,true);

curl_setopt($crl,CURLOPT_POSTFIELDS,$post_data);

curl_setopt($crl,CURLOPT_HTTPHEADER,array(
    'content-type: application/json' ,
    'authorization: 1d8affd0-9170-11ed-bedf-f73f2d8f00b6'
));
$result=curl_exec($crl);
$decode=json_decode($result,true);
file_put_contents("testzsd.txt",$decode['is_reachable']);
if($decode['is_reachable']==='safe')
{
   return true;
}
else{
    return false;
}
    }
   public function sign()
   {
    //    $this->load->helper('file');
    //    $dt="function entered";
    //     write_file('vbs.txt',$dt);
      // print_r($_POST);
      // echo("i am in jhbjhcookiechk");
     //file_put_contents("testz.txt",$_POST);
// 		//$this->load->database();
   
       /* receive from ajax*/
        $username = $this->input->post('UserName');
        $Password = $this->input->post('Password');
      
        if (!isset($username) || $username == '' || $username == 'undefined') {
            echo 2;
            exit();
        }
        if (!isset($Password) || $Password == '' || $Password == 'undefined') {
          
            echo 3;
            exit();
        }
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
          
            echo 4;
            exit();
        }
         else {
       //  print_r($_POST);
         //}
if($this->emailvalid($username))
{
 //print_r($_POST);
          
          //  $Login = new SLogin();
        //    $this->load->helper('file');
        //    $dt="validemail";
        //    write_file('vb.txt',$dt);
           $result = $this->Slogin->validate($username, $Password);
            if ($result == 1) {
                
                /*If everything is fine, then go here, and return 1 as output and set session*/
                $us=base64_encode($username);

                $data = array(
                    'CID' =>$us,
                    'SIID' => $this->session->userdata("ums"),
                    'IMAGES' => $this->session->userdata("imgs")
                   
                );
                $this->session->set_userdata('auth', $data);
                $cookie_name = "cookie_hash";
               file_put_contents("test.txt",$this->session->userdata('auth')['CID']);
$cookie_value = $this->session->userdata('auth')['CID'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
                echo 1;
            } else {
                /*If Both Username &  Password that we recieved is invalid, go here, and return 5 as output*/
                echo $result;
            }

       
   }
   else{
    echo 2;
   
   }
}
}
}
	

