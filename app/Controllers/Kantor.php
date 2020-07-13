<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_kantor;

class Kantor extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this->M_kantor = new M_kantor();
  }

  public function index()
  {
    $data = [
      'title' => 'Kantor',
      'kantor' => $this->M_kantor->get_all_data(),
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('s_home', $data);
  }

  //--------------------------------------------------------------------
  public function add()
  {
    $data = [
      'title' => 'Add Kantor',
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('s_add_kantor', $data);
  }
}
