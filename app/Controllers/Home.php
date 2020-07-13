<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'Home',
			'isi' => 'v_home', // s_ = template & v_ = templates
		];
		echo view('layout/v_template', $data);
		// return view('s_home', $data);
	}

	//--------------------------------------------------------------------

}
