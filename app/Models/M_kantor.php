<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kantor extends Model
{
  public function get_all_data()
  {
    return $this->db->table('tbl_upload')->get()->getResultArray();
  }
}
