<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signcontroller extends CI_Controller {

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
       
        $this->load->model('Slogin');
    }
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
       // echo("i am in LOGINCON");
        
		//$this->load->database();
		
	}
    public function sogins()
	{
       
       if (isset($_SESSION['auth']['SIID'])) {

        $this->load->view('main');
    } else {
        echo "error redirect";
        $this->load->view('login');
    }
		
	}
    public function emailvalid($em)
    {
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
        // $this->load->helper('file');
        // $dt="function entered";
        // write_file('vbs.txt',$dt);
       // print_r($_POST);
        echo("i am in jhbjhcookiechk");
      // file_put_contents("testz.txt",$_POST);
// 		//$this->load->database();
	
        /* receive from ajax*/
//         $username = $this->input->post('UserName');
//         $Password = $this->input->post('Password');
       
//         if (!isset($username) || $username == '' || $username == 'undefined') {
//             echo 2;
//             exit();
//         }
//         if (!isset($Password) || $Password == '' || $Password == 'undefined') {
           
//             echo 3;
//             exit();
//         }
//         $this->form_validation->set_rules('UserName', 'UserName', 'required');
//         $this->form_validation->set_rules('Password', 'Password', 'required');
//         if ($this->form_validation->run() == FALSE) {
           
//             echo 4;
//             exit();
//         }
//          else {
          
//          //}
// if(emailvalid($username))
// {
           
//             $Login = new SLogin();
//            $this->load->helper('file');
//            $dt="validemail";
//            write_file('vb.txt',$dt);
//            $result = $this->Slogin->validate($username, $Password);
//             if ($result == 1) {
//                 /*If everything is fine, then go here, and return 1 as output and set session*/
//                 $us=base64_encode($username);

//                 $data = array(
//                     'CID' =>$us,
//                     'SIID' => $us,
//                     'IMAGES' => "./images/sample"
                    
//                 );
//                 $this->session->set_userdata('auth', $data);
//                 $cookie_name = "cookie_hash";
//                file_put_contents("test.txt",$_SESSION['auth']['CID']);
// $cookie_value = $_SESSION['auth']['CID'];
// setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
//                 echo 1;
//             } else {
//                 /*If Both Username &  Password that we recieved is invalid, go here, and return 5 as output*/
//                 echo $result;
//             }

        
//    }
//    else{
//     echo 2;
    
//    }
// }
}
}
	

