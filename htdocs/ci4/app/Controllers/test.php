<?php

namespace App\Controllers;

class Topic extends BaseController
{
	public function index()
	{
		echo '토픽 페이지';
	}
	public function get($id){
		echo '토픽'.$id;
	}
}
