<?php

namespace App\Controllers;

use App\Models\ModelCharts;

class Charts extends BaseController
{
  public function __construct()
  {
    helper('form');
    $this->ModelCharts = new ModelCharts();
  }

  public function index()
  {

    // return view('welcome_message');
    $data = [
      'title' => 'Charts',
      'chart' => $this->ModelCharts->get_all_data(),
      'isi' => 'charts/my_charts', // s_ = template & v_ = templates
    ];
    echo view('layout/v_template', $data);
  }

  //--------------------------------------------------------------------

}
