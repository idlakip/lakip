<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kantor extends Model
{
  public function get_all_data()
  {
    return $this->db->table('gis_kantor')->get()->getResultArray();
  }

  public function insert_data($data)
  {
    return $this->db->table('gis_kantor')->insert($data);
  }

  public function detail($id_kantor)
  {
    return $this->db->table('gis_kantor')->where('id_kantor', $id_kantor)->get()->getRowArray();
  }

  public function update_kantor($data, $id_kantor)
  {
    return $this->db->table('gis_kantor')->update($data, array('id_kantor' => $id_kantor));
  }

  public function delete_kantor($id_kantor)
  {
    return $this->db->table('gis_kantor')->delete(array('id_kantor' => $id_kantor));
  }
}
