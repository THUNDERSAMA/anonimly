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
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID']));
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
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID']));
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
        $form=$this->input->post();
        print_r ($form);
    }
    public function mentor()
	{
        $r_query = $this->db->get_where('registrations', array('MID' => $this->session->userdata('auth')['CID']));
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
}