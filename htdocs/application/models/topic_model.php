<?php
class Topic_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function gets(){
        return $this->db->query('SELECT * FROM topic')->result();
    }
    public function get($topic_id){
        //active record 방식: 표준 sql문 사용 -> 이식성
        return $this->db->get_where('topic',array('id'=>$topic_id))->row();
    }
}