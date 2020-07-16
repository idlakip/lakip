<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCharts extends Model
{
  public function get_all_data()
  {
    return $this->db->table('tbl_chart')->get()->getResultArray();
  }

  public function insert_data($data)
  {
    return $this->db->table('tbl_chart')->insert($data);
  }

  public function detail($id)
  {
    return $this->db->table('tbl_chart')->where('id', $id)->get()->getRowArray();
  }

  public function update_chart($data, $id)
  {
    return $this->db->table('tbl_chart')->update($data, array('id' => $id));
  }

  public function delete_chart($id)
  {
    return $this->db->table('tbl_chart')->delete(array('id' => $id));
  }
}
