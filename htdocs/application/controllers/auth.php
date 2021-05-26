<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Auth extends MY_Controller{
    function __construct(){
        parent::__construct();       
    }

    function login(){
        $this->load->config('opentutorials');
        $this->_head();     
        $this->load->view('login');
        $this->_footer();
    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect("topic");
    }

    function join(){
        $this->_head();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','이메일주소','required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nickname','닉네임','required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('password','비밀번호','required|min_length[6]|max_length[30]|matches[re_password]');
        $this->form_validation->set_rules('re_password','비밀번호 확인','required');
        if($this->form_validation->run() === false){
            $this->load->view('join');
        } else{
            //descryption
            //add DB
        }
        $this->_footer();
    }

    function authentication(){
        //var_dump($this->config->item('authentication'));
        $authentication=$this->config->item('authentication');
        if($this->input->post('id')==$authentication['id']&&
        $this->input->post('password')==$authentication['password']){
            $this->session->set_userdata('is_login',true);
            $this->load->helper('url');
            redirect("/topic/add");
        } else{
            //echo '로그인 실패';
            $this->session->set_flashdata('message','로그인에 실패하였습니다.'); 
            $this->load->helper('url');
            redirect('auth/login'); 
        }
    }
}