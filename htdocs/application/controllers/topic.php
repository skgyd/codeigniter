<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function __construct(){ //생성자. _->url 라우팅 불가
        parent::__construct();
        $this->load->database();
        $this->load->model('topic_model');
        $topics=$this->topic_model->gets();
        $this->load->config('opentutorials');
        $this->load->view('head');
        $this->load->view('topic_list',array('topics'=>$topics));
        
    }
	public function index()
	{
        //$topics=$this->topic_model->gets();
        //$this->load->view('head');
        //$this->load->view('topic_list',array('topics'=>$topics));
		$this->load->view('main');
        $this->load->view('footer');
	}

    public function get($id){
        //$topics=$this->topic_model->gets();
        $topic=$this->topic_model->get($id);
        //$this->load->view('head');
        // $data=array('id'=>$id);
        // $this->load->view('main',$data);
        //$this->load->view('topic_list',array('topics'=>$topics));
        $this->load->helper(array('url', 'HTML', 'korean'));  //helper
        $this->load->view('get',array('topic'=>$topic));
        $this->load->view('footer');
    }
    function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','제목','required');
        $this->form_validation->set_rules('description','본문','required');
        if($this->form_validation->run() == FALSE){ //사용자 입력값 유효성 검증
            $this->load->view('add');
        }else{  //set_rules 조건 수행 시
            $topic_id = $this->topic_model->add($this->input->post('title'),$this->input->post('description'));
            $this->load->helper('url');
            redirect('topic/get/'.$topic_id);
        }
        $this->load->view('footer');
    }
}
