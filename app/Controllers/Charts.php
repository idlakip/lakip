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
  public function add()
  {
    $data = [
      'title' => 'Data Charts',
      'chart' => $this->ModelCharts->get_all_data(),
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('charts/s_add_charts', $data);
  }
  //--------------------------------------------------------------------
  public function save()
  {
    $valid = $this->validate([
      'tahun' => [
        'label' => 'Tahun',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'bulan' => [
        'label' => 'Bulan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'jumlah' => [
        'label' => 'Jumlah',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('charts/add'));
    } else {

      $data = [
        'tahun' => $this->request->getPost('tahun'),
        'bulan' => $this->request->getPost('bulan'),
        'jumlah' => $this->request->getPost('jumlah'),

      ];

      $this->ModelCharts->insert_data($data);
      session()->setFlashdata('success', 'Data berhasil ditambahkan');
      return redirect()->to(base_url('charts'));
    }
  }
  //--------------------------------------------------------------------

  public function edit($id)
  {
    $data = [
      'title' => 'Edit Data Chart',
      'chart' => $this->ModelCharts->detail($id)
    ];
    return view('charts/s_edit_charts', $data);
  }
  //--------------------------------------------------------------------

  public function update($id)
  {
    $valid = $this->validate([
      'tahun' => [
        'label' => 'Tahun',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'bulan' => [
        'label' => 'Bulan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'jumlah' => [
        'label' => 'Jumlah',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('charts/edit'));
    } else {

      $data = [
        'tahun' => $this->request->getPost('tahun'),
        'bulan' => $this->request->getPost('bulan'),
        'jumlah' => $this->request->getPost('jumlah')

      ];

      $this->ModelCharts->update_chart($data, $id);
      session()->setFlashdata('success', 'Data berhasil diupdate');
      return redirect()->to(base_url('charts'));
    }
  }
  //--------------------------------------------------------------------

  public function delete($id)
  {
    $this->ModelCharts->delete_chart($id);
    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('charts'));
  }
}
