<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Regcontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Mlogin');
        $this->load->model('Feedmain');
    }
    public function index()
	{

    }
    public function reg_entreprenuer()
    {
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID'],"STATUS" => '0'));
        $r_result = $r_query->result();
        
        if (count($r_result) > 0) {
        $this->db->where('MID', $this->session->userdata('auth')['CID']);
        $query = $this->db->get('entreprenuer');
        $user_data = $query->row_array();
        $this->load->view('registrations/pr_entreprenuer', array('user_data' => $user_data));

        
        }
        else
        {
            $this->load->view('registrations/pr_entreprenuer');
        }
        
    }
    public function reg_mentor()
	{
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID'],"STATUS" => '0'));
        $r_result = $r_query->result();
        
        if (count($r_result) > 0) {
        $this->db->where('MID', $this->session->userdata('auth')['CID']);
        $query = $this->db->get('mentors');
        $user_data = $query->row_array();
        $this->load->view('registrations/pr_mentor', array('user_data' => $user_data));

        
        }
        else
        {
            $this->load->view('registrations/pr_mentor');
        }
    }
    public function entreprenuer()
    {
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID'],"STATUS" => '0'));
        $r_result = $r_query->result();
        
        if (count($r_result) > 0) {
            $data = array(
                'MID' => $this->session->userdata('auth')['CID'],
                'NAME' => $this->input->post('name'),
                'AGE' => $this->input->post('age'),
                'INDUSTRY' => implode (", ",$this->input->post('industry')),
                'LOCATION' => $this->input->post('location'),
                'STARTUP' => $this->input->post('startup'),
                'STAGE' => $this->input->post('stage'),
                'NEED' => $this->input->post('need'),
                'DESCRIBES' => $this->input->post('desc'),
                'URL' => $this->input->post('url')
            );
            $this->db->update('entreprenuer', $data);
        
        } else {
                $data = array(
                    'MID' => $this->session->userdata('auth')['CID'],
                    'NAME' => $this->input->post('name'),
                    'AGE' => $this->input->post('age'),
                    'INDUSTRY' => implode (", ",$this->input->post('industry')),
                    'LOCATION' => $this->input->post('location'),
                    'STARTUP' => $this->input->post('startup'),
                    'STAGE' => $this->input->post('stage'),
                    'NEED' => $this->input->post('need'),
                    'DESCRIBES' => $this->input->post('desc'),
                    'URL' => $this->input->post('url')
                );
                $this->db->insert('entreprenuer', $data);
                $data1 = array(
                    'MID' => $this->session->userdata('auth')['CID'],
                    'TYPE' => "2"
                );
                $this->db->insert('registrations', $data1);
            }
            $this->load->view('main');
    }
    public function mentor()
	{
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID'] ,"STATUS" => '0'));
$r_result = $r_query->result();

if (count($r_result) > 0) {
    $data = array(
        'MID' => $this->session->userdata('auth')['CID'],
        'NAME' => $this->input->post('name'),
        'AGE' => $this->input->post('age'),
        'INTEREST' => implode (", ",$this->input->post('interest')),
        'EXPERTISE' => $this->input->post('expertise'),
        'EXPRIENCE' => $this->input->post('experience'),
        'COMPANY' => $this->input->post('company'),
        'AVAIL' => $this->input->post('availability'),
        'FAVAIL' => $this->input->post('favailability'),
        'URL' => $this->input->post('currenturl')
    );
    $this->db->update('mentors', $data);

} else {
        $data = array(
            'MID' => $this->session->userdata('auth')['CID'],
            'NAME' => $this->input->post('name'),
            'AGE' => $this->input->post('age'),
            'INTEREST' => implode (", ",$this->input->post('interest')),
            'EXPERTISE' => $this->input->post('expertise'),
            'EXPRIENCE' => $this->input->post('experience'),
            'COMPANY' => $this->input->post('company'),
            'AVAIL' => $this->input->post('availability'),
            'FAVAIL' => $this->input->post('favailability'),
            'URL' => $this->input->post('currenturl')
        );
        $this->db->insert('mentors', $data);
        $data1 = array(
            'MID' => $this->session->userdata('auth')['CID'],
            'TYPE' => "1"
        );
        $this->db->insert('registrations', $data1);
    }
    $this->load->view('main');
}
public function getbest() {
    $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID'] ,'STATUS' => '0','TYPE'=>'2'));
$r_result = $r_query->result();

if (count($r_result) > 0) {
    $user_query = $this->db->get_where('entreprenuer', array('MID' => $this->session->userdata('auth')['CID']));
                $usere = $user_query->row_array();
                $xc=$usere['INDUSTRY'];
    $this->load->database();
    //SELECT * FROM mentors WHERE INTEREST LIKE '%$xc%' AND status = '0'
    $sql = "SELECT *
    FROM maskers
    INNER JOIN  mentors ON mentors.MID = maskers.MASKING_ID
    WHERE LOWER(mentors.INTEREST) LIKE '%".strtolower($xc)."%' AND mentors.STATUS = '0'";
    $query = $this->db->query($sql);
    $datas = $query->result();
    // $datas['users'] = $result;
    file_put_contents("testcmt.txt",$xc.json_encode($datas));
    $this->load->view('search', array('datas' => $datas));
}
}
}