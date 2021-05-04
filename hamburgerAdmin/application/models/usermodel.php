<?php


class UserModel extends CI_Model {

  public function getUserByEmailAndPassword($email, $password) {
      $password = hash('sha512', $password);

      $this->db->select('id, email, jelszo, ervenyes_e, deleted_at');
      $this->db->from('felhasznalo');
      $this->db->where('email', $email);
      $this->db->where('jelszo', $password);
      $this->db->where('ervenyes_e', 1);
      $this->db->where('deleted_at', NULL);

        $query = $this->db->get();
          if($query->num_rows() == 1) {
          return $query->row_array();
        }
      return array();
  }

  public function getUserData() {

    $this->db->select('id, felhasznalonev');
    $this->db->from('felhasznalo');

    $query = $this->db->get();
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    return -1;
  }

}

 ?>
