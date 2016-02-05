<?php
/* 
 *  Developer : Mary Gichohi
 *  PHP 5.6 | CodeIgniter 2.2
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $data['project'] = "Uchumi";
        $data['title'] = 'Sales';
        $this->load->view('include/header' , $data);
    }
    
    public function index()
    {
        
            
    }
    
}

