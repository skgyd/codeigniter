<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('kdate')){   //kdate() 중복 사용으로 인한 에러 방지
    function kdate($stamp){
        return date('o년 n월 j일, G시 i분 s초', $stamp);
    }
}