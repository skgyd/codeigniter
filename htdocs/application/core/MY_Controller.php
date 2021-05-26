<?php
class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function _head(){
        $this->load->config('opentutorials');
        $this->load->view('head');
    }

    function _footer(){
        $this->load->view('footer');
    }
}