<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Mlogin');
        $this->load->model('Feedmain');
    }
    public function feedload()
    {
       
            $last_ranking = $this->input->post('last_ranking');
            $limit = 10; 
            $this->db->select('posts.*, maskers.SIID, maskers.IMAGES');
            $this->db->from('posts');
            $this->db->join('maskers', 'posts.MASKIND_ID = maskers.MASKING_ID');
            $this->db->where('RATINGS <=', $last_ranking);
            $this->db->where('STATUS', '0');
            $this->db->order_by('RATINGS', 'desc');
            $this->db->limit($limit);
            if (!empty($_POST['loaded_posts'])) {
              $loaded_posts = explode(',', $this->input->post('loaded_posts'));
            // file_put_contents("PST.txt","SC".$loaded_posts);
              $this->db->where_not_in('ID', $loaded_posts);
            }
            
            $query = $this->db->get();
            $posts = $query->result_array();
            foreach ($posts as &$post) {
                $user_id = $post['MASKIND_ID'];
                $user_query = $this->db->get_where('maskers', array('MASKING_ID' => $user_id));
                $user = $user_query->row_array();
                $post['SIID'] = $user['SIID'];
                $post['IMAGES'] = $user['IMAGES'];
            }
            // return the posts as JSON
            file_put_contents("testps.txt","SC".json_encode($posts));
            echo json_encode($posts);
          
    }
    public function comtupl()
    {
       $data = array(
        'MASKING_ID' => $this->session->userdata('auth')['CID'],
        'POST_ID' => $this->input->post('pid'),
        'COMMENT' => $this->input->post('cmt'),
        'MASKER_IMAGE' => $this->input->post('mimg')
        );
        $this->db->insert('comments', $data);
        $insert_id = $this->db->insert_id();
        
  $this->db->set('COMMENTS', 'COMMENTS+1', FALSE);
  $this->db->where('ID',$this->input->post('pid'));
  $this->db->update('posts');
        echo $insert_id;
      //file_put_contents("testcmt.txt",json_encode($_POST));

    }
    public function cmtload()
    {
      $this->db->select('*');
    $this->db->from('comments');
    $this->db->where('POST_ID', $this->input->post('pid'));
    $this->db->where('STATUS', '0');
    $this->db->order_by('RANK', 'desc');
    $query = $this->db->get();

    $data = $query->result();
    

    echo json_encode($data);
    }
      //comment dislike
    public function commlike()
    {
      $like_query = $this->db->get_where('comment_likes', array('CID' => $this->input->post('pid'), 'MID' => $this->session->userdata('auth')['CID']));
$like_result = $like_query->result();

if (count($like_result) > 0) {
 echo true;
} else {
  
  $like_data = array(
    'CID' => $this->input->post('pid'),
    'MID' => $this->session->userdata('auth')['CID'],
  );
  $this->db->insert('comment_likes', $like_data);
  $this->db->set('LIKES', 'LIKES+1', FALSE);
  $this->db->where('ID',$this->input->post('pid'));
  $this->db->update('comments');
  $post_query = $this->db->get_where('comments', array('ID' => $this->input->post('pid')));
  $post_result = $post_query->row();
  $R1 = ($post_result->LIKES / ($post_result->LIKES + $post_result->DISLIKES)) * 100;
  $R2 = (($post_result->LIKES - $post_result->DISLIKES) / ($post_result->LIKES + $post_result->DISLIKES + 1))*100;
  //$POID=$post_result->POST_ID;
  $R2=abs($R2);
  $rating = ($R1+$R2)/2;
  $this->db->set('RANK', $rating);
  $this->db->where('ID', $this->input->post('pid'));
  $this->db->update('comments');

}
    }
    //comment like
    public function commdislike()
    {
      $like_query = $this->db->get_where('comment_dislikes', array('CID' => $this->input->post('pid'), 'MID' => $this->session->userdata('auth')['CID']));
$like_result = $like_query->result();

if (count($like_result) > 0) {
 echo true;
} else {
  
  $like_data = array(
    'CID' => $this->input->post('pid'),
    'MID' => $this->session->userdata('auth')['CID'],
  );
  $this->db->insert('comment_dislikes', $like_data);
  $this->db->set('DISLIKES', 'DISLIKES+1', FALSE);
  $this->db->where('ID',$this->input->post('pid'));
  $this->db->update('comments');
  $post_query = $this->db->get_where('comments', array('ID' => $this->input->post('pid')));
  $post_result = $post_query->row();
  $R1 = ($post_result->LIKES / ($post_result->LIKES + $post_result->DISLIKES)) * 100;
  $R2 = (($post_result->LIKES - $post_result->DISLIKES) / ($post_result->LIKES + $post_result->DISLIKES + 1))*100;
  $R2=abs($R2);
  $rating = ($R1+$R2)/2;
  $this->db->set('RANK', $rating);
  $this->db->where('ID', $this->input->post('pid'));
  $this->db->update('comments');
}
    }
    //post like
    public function postlike()
    {
      $like_query = $this->db->get_where('post_likes', array('PID' => $this->input->post('pid'), 'MID' => $this->session->userdata('auth')['CID']));
$like_result = $like_query->result();

if (count($like_result) > 0) {
 echo true;
} else {
  
  $like_data = array(
    'PID' => $this->input->post('pid'),
    'MID' => $this->session->userdata('auth')['CID'],
  );
  $this->db->insert('post_likes', $like_data);
  $this->db->set('LIKES', 'LIKES+1', FALSE);
  $this->db->where('ID',$this->input->post('pid'));
  $this->db->update('posts');
  $post_query = $this->db->get_where('posts', array('ID' => $this->input->post('pid')));
  $post_result = $post_query->row();
  $R1 = ($post_result->LIKES / ($post_result->LIKES + $post_result->DISLIKES)) * 100;
  $R2 = (($post_result->LIKES - $post_result->DISLIKES) / ($post_result->LIKES + $post_result->DISLIKES + 1))*100;
  $R2=abs($R2);
  $rating = ($R1+$R2)/2;
  $this->db->set('RATINGS', $rating);
  $this->db->where('ID', $this->input->post('pid'));
  $this->db->update('posts');
}
    }
    //post dislike
    public function postdislike()
    {
      $like_query = $this->db->get_where('post_dislikes', array('PID' => $this->input->post('pid'), 'MID' => $this->session->userdata('auth')['CID']));
$like_result = $like_query->result();

if (count($like_result) > 0) {
 echo true;
} else {
  
  $like_data = array(
    'PID' => $this->input->post('pid'),
    'MID' => $this->session->userdata('auth')['CID'],
  );
  $this->db->insert('post_dislikes', $like_data);
  $this->db->set('DISLIKES', 'DISLIKES+1', FALSE);
  $this->db->where('ID',$this->input->post('pid'));
  $this->db->update('posts');
  $post_query = $this->db->get_where('posts', array('ID' => $this->input->post('pid')));
  $post_result = $post_query->row();
  $R1 = ($post_result->LIKES / ($post_result->LIKES + $post_result->DISLIKES)) * 100;
  $R2 = (($post_result->LIKES - $post_result->DISLIKES) / ($post_result->LIKES + $post_result->DISLIKES + 1))*100;
  $R2=abs($R2);
  $rating = ($R1+$R2)/2;
  $this->db->set('RATINGS', $rating);
  $this->db->where('ID', $this->input->post('pid'));
  $this->db->update('posts');
}
    }
    public function postupl()
    {
        //
        // $data = array(
        // 'title' => $this->input->post('title'),
        // 'body' => $this->input->post('body'),
        // 'images' => $this->input->post('media')
        // );
        file_put_contents("testz.txt",json_encode($_POST));
        // $img = imagecreatefromstring(base64_decode($string)); 
        // if($img != false) 
        // { 
        //    imagejpeg($img, '/path/to/new/image.jpg'); 
        
        // } 
        $status=0;
        $imageName=null; 
        if(""!=trim($_POST['image']))
        {
        $imageData = $_POST['image'];
        if (!file_exists('./uploads')) {
            mkdir('./uploads', 0777, true);
        }
        
  $imageName = uniqid().".png"; 
  $imageData = str_replace('data:image/png;base64,', '', $imageData);
  
  $imageData = imagecreatefromstring(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData)));
  
  $filePath = './uploads/' . $imageName;
  //file_put_contents($filePath, $imageData);
  imagepng($imageData, $filePath);

  $imtmp="C:/xampp2/htdocs/anonimly/uploads/".$imageName;
    
   //explict content detection
   try {
    
    $params = array(
        'media' => new CurlFile($imtmp),
          'models' => 'nudity-2.0,wad,offensive,gore',
        'api_user' => '698900732',
        'api_secret' => 'ccKuinvsL57LJyjsH2Lh',
      );

      $ch = curl_init('https://api.sightengine.com/1.0/check.json');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
      $response = curl_exec($ch);
      curl_close($ch);
      
      $output = json_decode($response, true);
     // echo json_encode($output);
      if ($output['status'] == 'success') {
        $nudity = $output['nudity'];
        $weapon = $output['weapon'];
        $alcohol = $output['alcohol'];
        $drugs = $output['drugs'];
        $offensive = $output['offensive'];
        $gore = $output['gore'];
        
        if ($nudity['sexual_activity'] >= 0.5 || $nudity['sexual_display'] >= 0.5 || $nudity['erotica'] >= 0.5 || $nudity['suggestive'] >= 0.5 ||
            $weapon >= 0.5 || $alcohol >= 0.5 || $drugs >= 0.5 || $offensive['prob'] >= 0.5 || $gore['prob'] >= 0.5) {
          
                $status=2;
        } else {
          
          $status=0;
        }
      } else {
      
        echo "Error: " . $output['error']['message'];
      }
   } catch (\Throwable $th) {
    
   }
}
   //ends
     $session_data=$this->session->userdata();
     $data = array(
        'MASKIND_ID'=>get_cookie('cookie_hash'),
        'TITLE' =>$_POST['title'],
        'POST' => base64_encode($_POST['body']),
        'IMAGE' => $imageName,
        'STATUS'=>$status,
        'RATINGS'=>rand(1,10)
        );
        file_put_contents("testz.txt",json_encode($data));
   // $this->load->model('ajax_model');
		$insert = $this->Feedmain->createpost($data);
	//	echo json_encode($insert);
  $response = array(
    'status' => $insert,
    'path' => $imageName
  );
  echo json_encode($response);
}
public function videocall()
{
  $id = $_GET['id'];
  $this->load->view('vc/videocall',array('user_data' => $id));
}
}
