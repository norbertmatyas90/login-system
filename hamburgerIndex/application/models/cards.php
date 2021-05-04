<?php
defined('BASEPATH') OR exit('No direct script access allowed');;

class Cards extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function hamburgers() {
      $this->db->select('recept.id, nev, hozzavalo1,
                                  hozzavalo2,
                                  hozzavalo3,
                                  hozzavalo4,
                                  hozzavalo5,
                                  hozzavalo6,
                                  hozzavalo7,
                                  rovid_leiras,
                                  elkeszites,
                                  hamburger_tipus, kep_neve');
      $this->db->from('recept');
      $this->db->join('kategoria', 'recept.tipus = kategoria.id');
      $this->db->join('kepek', 'recept.hamburger_kep = kepek.id');
      $query = $this->db->get();

      if($query->num_rows() > 0){
        return $query->result_array();
      }
      return [];
  }

  public function getBurgerData($id) {
      $id = (int)$id;

      $this->db->select('recept.id, nev, hozzavalo1,
                                  hozzavalo2,
                                  hozzavalo3,
                                  hozzavalo4,
                                  hozzavalo5,
                                  hozzavalo6,
                                  hozzavalo7,
                                  rovid_leiras,
                                  elkeszites,
                                  hamburger_tipus, kep_neve');
      $this->db->from('recept');
      $this->db->join('kategoria', 'recept.tipus = kategoria.id');
      $this->db->join('kepek', 'recept.hamburger_kep = kepek.id');
      $this->db->where('recept.id', $id);
      
      $query = $this->db->get();

        if($query->num_rows() > 0){
          return $query->row_array();
        }
        return [];
  }

  public function sendRecipeData($output) {

    $this->db->set('nev', $output['nev']);
    $this->db->set('hozzavalo1', $output['hozzavalo1']);
    $this->db->set('hozzavalo2', $output['hozzavalo2']);
    $this->db->set('hozzavalo3', $output['hozzavalo3']);
    $this->db->set('hozzavalo4', $output['hozzavalo4']);
    $this->db->set('hozzavalo5', $output['hozzavalo5']);
    $this->db->set('hozzavalo6', $output['hozzavalo6']);
    $this->db->set('hozzavalo7', $output['hozzavalo7']);
    $this->db->set('rovid_leiras', $output['rovid_leiras']);
    $this->db->set('elkeszites', $output['elkeszites']);
    $this->db->set('tipus', $output['kategoria']);
    $this->db->set('megjelenhet_e', 0);

    $this->db->insert('recept');

  }

  public function uploadImg($image) {

    $data = ['kep_neve' => $image];

      $this->db->set($data);
      $this->db->insert('kepek');

  }

  public function getImgData($id) {
    $id = (int)$id;

    $this->db->select('id', 'kep_neve', 'hamburger_id');
    $this->db->from('kepek');
    $this->db->join('recept', 'kepek.hamburger_id = recept.id');
    $this->db->where('kepek.hamburger_id', $id);

    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->row_array();
    }
    return [];

  }

















}
 ?>
