<?php

namespace App\Controllers;

class Topic extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('topic');
		echo view('footer');
	}
	public function get($id){
		echo view('head');
		$data = array('id'=>$id);
		echo view('main',$data);
		echo view('footer');
	}
}
