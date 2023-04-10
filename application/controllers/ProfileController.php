<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ProfileController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Mlogin');
        $this->load->model('Feedmain');
    }
    public function cns()
    {
      $eid=$this->session->userdata('auth')['CID'];
      if($this->session->userdata('type')!=null)
      {
       
        if($this->session->userdata('type')==2)
      {
        $sql = "SELECT *
        FROM maskers
        INNER JOIN  applications ON applications.MMID = maskers.MASKING_ID
        WHERE applications.EMID='$eid' AND applications.STATUS = '2'";
         $query = $this->db->query($sql);
        $datas = $query->result_array();
          file_put_contents("testz.txt",json_encode($datas));
        $this->load->view('connections', array('datas' => $datas));
      }
      else
      {
        $sql = "SELECT *
        FROM maskers
        INNER JOIN  applications ON applications.EMID = maskers.MASKING_ID
        WHERE applications.MMID='$eid' AND applications.STATUS = '2'";
         $query = $this->db->query($sql);
        $datas = $query->result_array();
          file_put_contents("testz.txt",json_encode($datas));
        $this->load->view('connections', array('datas' => $datas));
      }
    }
      //$this->load->view('connections');
    }
    public function ablock()
    {
      if($this->session->userdata('type')!=null)
      {
       
        if($this->session->userdata('type')==2)
      {
 $cb=$this->input->post('pid');
$this->db->set('STATUS', 1);
$this->db->where('MMID', $cb);
$this->db->where('EMID', $this->session->userdata('auth')['CID']);
$this->db->update('applications');
// log_message('debug', 'SQL query: ' . $this->db->last_query());
// log_message('debug', 'Affected rows: ' . $this->db->affected_rows());
if ($this->db->affected_rows() > 0) {
  echo "ok";
}
}
else
{
  $cb=$this->input->post('pid');
  $this->db->set('STATUS', 1);
  $this->db->where('EMID', $cb);
  $this->db->where('MMID', $this->session->userdata('auth')['CID']);
  $this->db->update('applications');

  if ($this->db->affected_rows() > 0) {
    echo "ok";
  }

    }
  }
}
    public function feedload()
    {
       
            $last_ranking = $this->input->post('last_ranking');
            $limit = 10; 
            $this->db->select('posts.*, maskers.SIID, maskers.IMAGES');
            $this->db->from('posts');
            $this->db->join('maskers', 'posts.MASKIND_ID = maskers.MASKING_ID');
            $this->db->where('STATUS', '0');
            $this->db->where('MASKIND_ID', $this->input->post('fr'));
            $this->db->order_by('ID', 'desc');
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
           
            file_put_contents("testps.txt","SC".json_encode($posts));
            echo json_encode($posts);
          
    }
    public function applins()
    {
      $data = array(
        'EMID' => $this->session->userdata('auth')['CID'],
        'MMID' => $this->input->post('pid'),
        'APPLICATION' => $this->input->post('appl'),
        );
        $this->db->insert('applications', $data);

    }
    public function adecline()
    {
 $cb=$this->input->post('pid');
$this->db->set('STATUS', 1);
$this->db->where('ID', $cb);
$this->db->update('applications');
// log_message('debug', 'SQL query: ' . $this->db->last_query());
// log_message('debug', 'Affected rows: ' . $this->db->affected_rows());
if ($this->db->affected_rows() > 0) {
  echo "ok";
}
    }
 
public function aacept()
{
$cb=$this->input->post('pid');
$this->db->set('STATUS', 2);
$this->db->where('ID', $cb);
$this->db->update('applications');
// log_message('debug', 'SQL query: ' . $this->db->last_query());
// log_message('debug', 'Affected rows: ' . $this->db->affected_rows());
if ($this->db->affected_rows() > 0) {
echo "ok";
}

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
    public function prevappl()
    {
      $result = $this->db->get_where('applications', array('EMID' => $this->input->post('pid')))->row();
      if ($result) {
      
        echo $result->APPLICATION;
    } else {
        
        echo "notx";
    }
    
    }
    public function modalload()
    {
      $id=$this->input->post('pid');
      $sql = "SELECT *
      FROM mentors
      INNER JOIN  maskers ON mentors.MID = maskers.MASKING_ID
      WHERE mentors.ID =$id AND mentors.STATUS = '0'";
       $query = $this->db->query($sql);
      $results = $query->result();

   // $data = $query->result();
    

    echo json_encode($results);
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
   
public function profile()
{
  $id = $_GET['id'];
  $like_query = $this->db->get_where('maskers', array('MASKING_ID' => $id, 'DELETED' => "0"));
  $like_result = $like_query->result_array();
    //$results = $query->result_array();
   // file_put_contents("testz.txt",json_encode($like_result));
   $r_query = $this->db->get_where('bio', array('MID' => $id ,'STATUS' => '0'));
  $r_result = $r_query->result();
  
  if (count($r_result) > 0) {
    $this->db->select('BIO'); 
$this->db->from('bio');
$this->db->where('MID', $id);
$query = $this->db->get();
$result = $query->row_array()['BIO'];
$this->session->set_userdata('tempbio', $result);

  }
  $this->load->view('p_profile', array('like_result' => $like_result));
}
public function private_profile()
{
  $r_query = $this->db->get_where('bio', array('MID' => $this->session->userdata('auth')['CID'] ,'STATUS' => '0'));
  $r_result = $r_query->result();
  
  if (count($r_result) > 0) {

  $id = $this->session->userdata('auth')['CID'];
  $sql = "SELECT *
  FROM maskers
  INNER JOIN  bio ON bio.MID = maskers.MASKING_ID
  WHERE bio.STATUS = '0'";
   $query = $this->db->query($sql);
  $like_result = $query->result_array();
    //$results = $query->result_array();
    file_put_contents("testz.txt",json_encode($like_result));
  $this->load->view('pr_profile', array('like_result' => $like_result));
}
else{
 $id = $this->session->userdata('auth')['CID'];
  $like_query = $this->db->get_where('maskers', array('MASKING_ID' => $id, 'DELETED' => "0"));
  $like_result = $like_query->result_array();
    //$results = $query->result_array();
    file_put_contents("testz.txt",json_encode($like_result));
  $this->load->view('pr_profile', array('like_result' => $like_result));
}
}
public function imupdate()
{
  $config['upload_path'] = './images/';
  $config['allowed_types'] = 'gif|jpg|jpeg|png';
  $this->load->library('upload', $config);

  if ($this->upload->do_upload('image')) {
  
    $image_path = base_url('images/'.$this->upload->data('file_name'));
    // Updating  in database
    $cb=$this->session->userdata('auth')['CID'];
$this->db->set('IMAGES', $image_path);
$this->db->where('MASKING_ID', $cb);
$this->db->update('maskers');

$this->db->set('MASKER_IMAGE', $image_path);
$this->db->where('MASKING_ID', $cb);
$this->db->update('comments');

    $image_url = base_url('images/'.$this->upload->data('file_name'));
    echo json_encode(array('url' => $image_url));
  }
}
public function bioup()
{
  $r_query = $this->db->get_where('bio', array('MID' => $this->session->userdata('auth')['CID'] ,'STATUS' => '0'));
  $r_result = $r_query->result();
  
  if (count($r_result) > 0) {
    $this->db->set('BIO', $this->input->post('bio'));
    $this->db->where('MID',$this->session->userdata('auth')['CID']);
    $this->db->update('bio');
  }
  else{
    $data = array(
      'MID' => $this->session->userdata('auth')['CID'],
      'BIO' => $this->input->post('bio'),
      );
      $this->db->insert('BIO', $data);
  }
}
public function search()
{
    $query = $this->input->get('q');
    $sql = "SELECT *
    FROM mentors
    INNER JOIN  maskers ON mentors.MID = maskers.MASKING_ID
    WHERE LOWER(mentors.NAME) LIKE '%".strtolower($query)."%' AND mentors.STATUS = '0'";
     $query = $this->db->query($sql);
    $results = $query->result_array();

    header('Content-Type: application/json');
    echo json_encode($results);
}
public function detail()
{
  $id = $this->input->get('id');
  $sql = "SELECT *
  FROM mentors
  INNER JOIN  maskers ON mentors.MID = maskers.MASKING_ID
  WHERE mentors.ID =$id AND mentors.STATUS = '0'";
   $query = $this->db->query($sql);
  $results = $query->result_array();
  // $details = $this->db->get_where('mentors', array('ID' => $id))->row_array();

  header('Content-Type: application/json');
  echo json_encode($results);
}
}
