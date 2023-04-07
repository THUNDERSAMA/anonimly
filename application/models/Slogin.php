<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SLogin extends CI_Model
{
   
    function getIPAddress() {  
        //file_put_contents("testz.txt","validate1");
        //whether ip is from the share internet  
    //      if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
    //                 $ip = $_SERVER['HTTP_CLIENT_IP'];  
    //         }  
    //     //whether ip is from the proxy  
    //     elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
    //                 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    //      }  
    // //whether ip is from the remote address  
    //     else{  
    //              $ip = $_SERVER['REMOTE_ADDR'];  
    //      }  
    //      return $ip;  
    
    } 
   

    /*function to use fetch the data from users table*/
    function validate($user, $pass)
    {
      
       // echo('<script>console.log("hello");</script>');
       $strings = ["https://img.freepik.com/free-vector/hand-drawn-happy-black-person-illustration_23-2149454431.jpg?w=826&t=st=1680417053~exp=1680417653~hmac=da5f4240d987a9ec7880f41a25e40b5eb94f58f69f36347b6432057884761840"
       , "https://img.freepik.com/free-vector/hand-drawn-chinese-new-year-lucky-money-illustration_23-2149232638.jpg?w=826&t=st=1680417056~exp=1680417656~hmac=ccad0384a294e527c8cd7d3cefef4f17f21555028936b54eae3bcdaceb441895"
       , "https://img.freepik.com/free-vector/hand-drawn-gaucho-drinking-mate-illustration_52683-78845.jpg?w=826&t=st=1680417061~exp=1680417661~hmac=dc804b37e7d54fa6d93dbd960c81f5b16cd7d382a9749d0837fdc6325f87b7c2"
       , "https://img.freepik.com/free-vector/hand-drawn-nft-style-ape-illustration_23-2149622034.jpg?w=826&t=st=1680417068~exp=1680417668~hmac=e8d154827149e0006b54f32cb4f0013ee231fe2ec2bf58e8278eaedf11435a42"
       , "https://img.freepik.com/free-vector/designers-joke-illustration_23-2147546769.jpg?t=st=1680416801~exp=1680417401~hmac=9866fee9b590be1b9ef44455d42a88d924b14f86017185c88332b112344fff12"
       , "https://img.freepik.com/premium-vector/urban-astonaut-with-skateboard-space_284825-416.jpg"
       , "https://img.freepik.com/premium-vector/young-inventor-cartoon-mascot_12402-52.jpg?w=740"
       , "https://img.freepik.com/free-vector/business-man-with-text-yes-i-can-hand-draw-sketch-illustration-design_460848-15233.jpg?w=740&t=st=1680417219~exp=1680417819~hmac=4a3efb0f40f4ac35331b48de5e641c2a4c0ada0a44b1ddd75634e6d77ab953cc"
    ];
$randomKey = array_rand($strings);
$randomString = $strings[$randomKey];
$username = substr($user, 0, strpos($user, '@')); 
$username = str_replace(['.', '_'], '', $username); 
$username = strtolower($username); 
$username .= rand(100, 999);
$usermae=$username;
$this->session->set_userdata("imgs",$randomString);
$this->session->set_userdata("ums",$usermae);
        $user = trim($user);
        $km=$user;
        $user=base64_encode($user);
        $users=base64_encode($user);
$pass = trim($pass);

$pass=base64_encode($km).$pass.base64_encode($km);
$hpass= hash('sha256', $pass);

$ip =  $this->input->ip_address();
file_put_contents("testz.txt",$ip);
$ip=base64_encode($ip);

$sqlz="SELECT * FROM maskers WHERE MASKING_ID='".$user."'";  
$queryz = $this->db->query($sqlz);
$resz = $queryz->result();
if(count($resz) == 0)
{
    
        $sql="INSERT INTO  users (EMAIL,PASSWORDS,IP_ADDRESS,MASKING_ID)
        VALUES ('".$users."', '".$hpass."', '".$ip."','".$user."')";  
        $query = $this->db->query($sql);
        //$res = $query->result();
        if($query)
        {
            $sqls="INSERT INTO  maskers (MASKING_ID,CID,SIID,DELETED,M_TIMES,IMAGES)
            VALUES ('".$user."', '".$user."', '".$usermae."','0','".$hpass."','".$randomString."')";  
            $querys = $this->db->query($sqls);
            //$res = $query->result();
            //update php admins set default then run
            if($querys)
            {
    $res=1;
            }
            else{
                $res=2;
            echo "Error: " . $sqls . "<br>" . $this->db->error();
        }
    }
    else{
        $res=3;
        echo "Error: " . $sql . "<br>" . $this->db->error();
    } 
}
else{
    $res=5;
}
        return $res;
    }
}