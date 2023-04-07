<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pagec extends  CI_Controller
{
    public function index()
    {
        echo 'i am index';
    }
    public function about()
    {
        echo 'i am indexssss';
    }
    public function blog($blogs='')
    {
        echo "$blogs";
        //$blogs echo data pass into address bar
        $this->load->view('blog');
        //call page blog in views 
    }
    public function demo()
    {
        $blogx['cv']="das";
        //$blogs echo data pass into address bar
        $this->load->view('demo',$blogx);
        //call page blog in views 
    }
    public function cxv()
    {
        $this->load->view('mail');
    }
}