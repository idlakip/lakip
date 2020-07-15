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
    return view('kantor/s_home', $data);
  }

  //--------------------------------------------------------------------
  public function add()
  {
    $data = [
      'title' => 'Add Kantor'
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('kantor/s_add_kantor', $data);
  }
  //--------------------------------------------------------------------

  public function save()
  {
    $valid = $this->validate([
      'nama_kantor' => [
        'label' => 'Nama Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'no_telp' => [
        'label' => 'Telephone',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'alamat' => [
        'label' => 'Alamat Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'pimpinan' => [
        'label' => 'Pimpinan Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'latitude' => [
        'label' => 'Latitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'longitude' => [
        'label' => 'Longitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'description' => [
        'label' => 'Description Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'photo' => [
        'label' => 'Foto Kantor',
        'rules' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png,image/gif]|max_size[photo,1500]',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('kantor/add'));
    } else {
      $image = $this->request->getFile('photo');
      $name = $image->getRandomName();
      $data = [
        'nama_kantor' => $this->request->getPost('nama_kantor'),
        'no_telp' => $this->request->getPost('no_telp'),
        'alamat' => $this->request->getPost('alamat'),
        'pimpinan' => $this->request->getPost('pimpinan'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'description' => $this->request->getPost('description'),
        'photo' => $name
      ];
      $image->move(ROOTPATH . 'foto', $name);
      $this->M_kantor->insert_data($data);
      session()->setFlashdata('success', 'Data berhasil ditambahkan');
      return redirect()->to(base_url('kantor'));
    }
  }
  //--------------------------------------------------------------------

  public function edit($id_kantor)
  {
    $data = [
      'title' => 'Edit Kantor',
      'kantor' => $this->M_kantor->detail($id_kantor)
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('kantor/s_edit_kantor', $data);
  }
  //--------------------------------------------------------------------

  public function update($id_kantor)
  {
    $valid = $this->validate([
      'nama_kantor' => [
        'label' => 'Nama Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'no_telp' => [
        'label' => 'Telephone',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'alamat' => [
        'label' => 'Alamat Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'pimpinan' => [
        'label' => 'Pimpinan Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'latitude' => [
        'label' => 'Latitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'longitude' => [
        'label' => 'Longitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'description' => [
        'label' => 'Description Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'photo' => [
        'label' => 'Foto Kantor',
        'rules' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png,image/gif]|max_size[photo,1500]',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('kantor/edit/' . $id_kantor));
    } else {
      $image = $this->request->getFile('photo');
      $name = $image->getRandomName();
      $data = [
        'nama_kantor' => $this->request->getPost('nama_kantor'),
        'no_telp' => $this->request->getPost('no_telp'),
        'alamat' => $this->request->getPost('alamat'),
        'pimpinan' => $this->request->getPost('pimpinan'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'description' => $this->request->getPost('description'),
        'photo' => $name
      ];
      $image->move(ROOTPATH . 'foto', $name);
      $this->M_kantor->update_kantor($data, $id_kantor);
      session()->setFlashdata('success', 'Data berhasil diupdate');
      return redirect()->to(base_url('kantor'));
    }
  }
  //--------------------------------------------------------------------

  public function delete($id_kantor)
  {
    $this->M_kantor->delete_kantor($id_kantor);
    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('kantor'));
  }
}
