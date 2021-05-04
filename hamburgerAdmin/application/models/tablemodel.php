<?php


class TableModel extends CI_Model {

  public function getHamburgerData() {
      $this->db->select('recept.id, nev, hozzavalo1, hozzavalo2,
                              hozzavalo3, hozzavalo4, hozzavalo5,
                              hozzavalo6, hozzavalo7, rovid_leiras, elkeszites,
                              megjelenhet_e, hamburger_tipus');
      $this->db->from('recept');
      $this->db->join('kategoria', 'recept.tipus=kategoria.id');
      $this->db->where('megjelenhet_e', 1);

      $query = $this->db->get();
      return $query->result_array();
    }


    public function getUsersData() {
      $this->db->select('id, felhasznalonev, email, ervenyes_e, created_at, deleted_at');
      $this->db->from('felhasznalo');

      $query = $this->db->get();
      return $query->result_array();
    }

    public function getUserRecepiesData() {
      $this->db->select('feltoltott_receptek.id, f_kep, f_recept_neve, f_hozzavalok, f_elkeszites,
                        hamburger_tipus, felhasznalonev, feltoltott_receptek.ervenyes_e, feltoltott_receptek.created_at, feltoltott_receptek.deleted_at');
      $this->db->from('feltoltott_receptek');
      $this->db->join('kategoria', 'feltoltott_receptek.f_kategoria=kategoria.id');
      $this->db->join('felhasznalo', 'feltoltott_receptek.felhasznalo_id=felhasznalo.id');

      $query = $this->db->get();
      return $query->result_array();
    }

    public function deleteRecepies($id) {
      $id = (int)$id;

      $this->db->set('megjelenhet_e', 0);
      $this->db->where('recept.id', $id);
      $this->db->update('recept');
    
    }

    public function getEditData($id) {

      $this->db->select('recept.id, nev, hozzavalo1, hozzavalo2,
                              hozzavalo3, hozzavalo4, hozzavalo5,
                              hozzavalo6, hozzavalo7, rovid_leiras, elkeszites,
                              megjelenhet_e, hamburger_tipus');
      $this->db->from('recept');
      $this->db->join('kategoria', 'recept.tipus=kategoria.id');
      $this->db->where('recept.id', $id);

      $query = $this->db->get();

      return $query->result_array();

    }


    public function editRecepies( $update) {

      $this->db->set('nev', $update['nev']);
      $this->db->set('hozzavalo1', $update['hozzavalo1']);
      $this->db->set('hozzavalo2', $update['hozzavalo2']);
      $this->db->set('hozzavalo3', $update['hozzavalo3']);
      $this->db->set('hozzavalo4', $update['hozzavalo4']);
      $this->db->set('hozzavalo5', $update['hozzavalo5']);
      $this->db->set('hozzavalo6', $update['hozzavalo6']);
      $this->db->set('hozzavalo7', $update['hozzavalo7']);
      $this->db->set('rovid_leiras', $update['rovid_leiras']);
      $this->db->set('elkeszites', $update['elkeszites']);
      $this->db->set('megjelenhet_e', $update['megjelenhet_e']);
      $this->db->set('tipus', $update['kategoria']);
      $this->db->where('recept.id', $update['id'] );
      $this->db->update('recept');

    }

    public function addRecepieData($newRecipe) {

      $this->db->set('nev', $newRecipe['nev'] );
      $this->db->set('hozzavalo1', $newRecipe['hozzavalo1']);
      $this->db->set('hozzavalo2', $newRecipe['hozzavalo2']);
      $this->db->set('hozzavalo3', $newRecipe['hozzavalo3']);
      $this->db->set('hozzavalo4', $newRecipe['hozzavalo4']);
      $this->db->set('hozzavalo5', $newRecipe['hozzavalo5']);
      $this->db->set('hozzavalo6', $newRecipe['hozzavalo6']);
      $this->db->set('hozzavalo7', $newRecipe['hozzavalo7']);
      $this->db->set('rovid_leiras', $newRecipe['rovid_leiras']);
      $this->db->set('elkeszites', $newRecipe['elkeszites']);
      $this->db->set('megjelenhet_e', $newRecipe['megjelenhet_e']);
      $this->db->set('tipus', $newRecipe['kategoria']);
      $this->db->insert('recept');

    }

}


 ?>
