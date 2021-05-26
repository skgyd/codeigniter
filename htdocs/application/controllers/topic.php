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
        //로그인 필요
        if( ! $this->session->userdata('is_login')){
            $this->load->helper('url');
            redirect('/auth/login');
        }
        //로그인이 되어있지 않다면 로그인 페이지로 리다이렉션


        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','제목','required');
        $this->form_validation->set_rules('description','본문','required');
        if($this->form_validation->run() == FALSE){ //사용자 입력값 유효성 검증
            $this->load->view('add');
        }else{  //set_rules 조건 수행 시
            $topic_id = $this->topic_model->add($this->input->post('title'),$this->input->post('description'));
            $this->load->helper('url');
            redirect('/topic/get/'.$topic_id);
        }
        $this->load->view('footer');
    }
    
    function upload_receive(){
        $config['upload_path']='./static/user';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']='100';
        $config['max_width']='1024';
        $config['max_height']='768';
        $this->load->library('upload',$config);

        if( ! $this->upload->do_upload("user_upload_file")){ 
            $error=array('error'=>$this->upload->display_errors());
            echo $this->upload->display_errors();
        } else{
            $data=array('upload_data'=>$this->upload->data());
            //echo "upload_success";
            //var_dump($data);
        }
    }

    function upload_form(){
        $this->load->view('upload_form');
        $this->load->view('footer');
    }
}
