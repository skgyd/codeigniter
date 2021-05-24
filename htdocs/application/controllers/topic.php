<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function __construct(){ //생성자
        parent::__construct();
        $this->load->database();
        $this->load->model('topic_model');
        $topics=$this->topic_model->gets();
        $this->load->view('topic_list',array('topics'=>$topics));
    }
	public function index()
	{
        //$topics=$this->topic_model->gets();
        $this->load->view('head');
        //$this->load->view('topic_list',array('topics'=>$topics));
		$this->load->view('main');
        $this->load->view('footer');
	}

    public function get($id){
        //$topics=$this->topic_model->gets();
        $topic=$this->topic_model->get($id);
        $this->load->view('head');
        // $data=array('id'=>$id);
        // $this->load->view('main',$data);
        //$this->load->view('topic_list',array('topics'=>$topics));
        $this->load->helper(array('url', 'HTML', 'korean'));  //helper
        $this->load->view('get',array('topic'=>$topic));
        $this->load->view('footer');
    }
}
