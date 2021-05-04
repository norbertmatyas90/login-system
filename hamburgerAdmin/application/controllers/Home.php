<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index() {

		if($this->isLogin()) {
			$this->load->view('home');
		}else{
			$this->load->view('login');
		}
	}

	public function login() {

		$this->form_validation->set_rules('email', 'Email cím', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Jelszó', 'trim|required|alpha_numeric|callback_usercheck');
		$this->form_validation->set_message('required', '{field} mező kitöltése kötelező!');
		$this->form_validation->set_message('valid_email', 'Nem megfelelő {field} formátum!');
		$this->form_validation->set_message('alpha_numeric', 'Nem megfelelő {field} formátum!');
		$this->form_validation->set_message('usercheck', 'Nem megfelelő felhasználónév vagy jelszó!');

		if(!$this->isLogin()){
			if($this->form_validation->run() === FALSE) {
					$this->load->view('login');

			}else{
				redirect('home/index');
			}
		}
	}


	public function usercheck() {

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$userArray = $this->usermodel->getUserByEmailAndPassword($email, $password);
		if(count($userArray) > 0) {
			$this->session->set_userdata('user', $userArray);
				return true;
			}
			return false;
	}

	private function isLogin() {

		if($this->session->has_userdata('user')){
			return true;
		}
		return false;
	}

	public function logout() {
		$this->session->unset_userdata('user');
		redirect('home/login');
	}

	public function hamburgerData() {
		$output = [];
		$output['hamburgerek'] = $this->tablemodel->getHamburgerData();
		$output['page'] = 'table';
		$output['title'] = 'Hamburgerek';
		$this->load->view('home', $output);
	}

	public function hozzavaloData() {
		$output = [];
		$output['hozzavalok'] = $this->tablemodel->getHamburgerData();
		$output['page'] = 'table';
		$output['title'] = 'Hozzávalók';
		$this->load->view('hozzavalok', $output);
	}

	public function kategoriaData() {
		$output = [];
		$output['kategoriak'] = $this->tablemodel->getHamburgerData();
		$output['page'] = 'table';
		$output['title'] = 'Kategória';
		$this->load->view('kategoria', $output);
		$this->load->view('userData', $output);
	}

	public function felhasznaloData() {
		$output = [];
		$output['felhasznalok'] = $this->tablemodel->getUsersData();
		$output['page'] = 'table';
		$output['title'] = 'Felhasználók';
		$this->load->view('felhasznalok', $output);
	}

	public function deleteQuestion() {

		$id = $this->input->get('id');
		$output = [];
		$output['hamburgerDatas'] = $this->tablemodel->getEditData($id);
		$output['page'] = 'Adattörlési figyelmezetés';
		$output['title'] = 'Recept törlés';
		$this->load->view('deleteData', $output);

	}

	public function deleteData() {
		$id = $this->input->post('id');
		$output = $this->tablemodel->deleteRecepies($id);
		$this->load->view('home');

	}

	public function editData() {

		$id = $this->input->get('id');
		$output = [];
		$output['hamburgerDatas'] = $this->tablemodel->getEditData($id);
		$output['page'] = 'Admin';
		$output['title'] = 'Recept szerkesztés';
		$this->load->view('editData', $output);
	}


	public function updateData() {
		
		$update = [];
		$update['nev'] = $this->input->post('nev');
		$update['hozzavalo1'] = $this->input->post('hozzavalo1');
		$update['hozzavalo2'] = $this->input->post('hozzavalo2');
		$update['hozzavalo3'] = $this->input->post('hozzavalo3');
		$update['hozzavalo4'] = $this->input->post('hozzavalo4');
		$update['hozzavalo5'] = $this->input->post('hozzavalo5');
		$update['hozzavalo6'] = $this->input->post('hozzavalo6');
		$update['hozzavalo7'] = $this->input->post('hozzavalo7');
		$update['rovid_leiras'] = $this->input->post('rovid_leiras');
		$update['elkeszites'] = $this->input->post('elkeszites');
		$update['megjelenhet_e'] = $this->input->post('megjelenhet_e');
		$update['kategoria'] = $this->input->post('kategoria');
		$update['id'] = $this->input->post('id');

			$eredmeny = $this->tablemodel->editRecepies($update);
			
			$this->load->view('home');
	
	}

	public function insertDataTable() {
		$this->load->view('insertDataTable');
	}

	public function addNewRecipe() {
		$newRecipe = [];

		if($this->input->post('nev')) {
			$newRecipe['nev'] = $this->input->post('nev');
			$newRecipe['hozzavalo1'] = $this->input->post('hozzavalo1');
			$newRecipe['hozzavalo2'] = $this->input->post('hozzavalo2');
			$newRecipe['hozzavalo3'] = $this->input->post('hozzavalo3');
			$newRecipe['hozzavalo4'] = $this->input->post('hozzavalo4');
			$newRecipe['hozzavalo5'] = $this->input->post('hozzavalo5');
			$newRecipe['hozzavalo6'] = $this->input->post('hozzavalo6');
			$newRecipe['hozzavalo7'] = $this->input->post('hozzavalo7');
			$newRecipe['rovid_leiras'] = $this->input->post('rovid_leiras');
			$newRecipe['elkeszites'] = $this->input->post('elkeszites');
			$newRecipe['megjelenhet_e'] = $this->input->post('megjelenhet_e');
			$newRecipe['kategoria'] = $this->input->post('kategoria');

			$this->tablemodel->addRecepieData($newRecipe);
		}

		$this->load->view('home');
	}

	public function userDataSet() {

		$output = [];
		$output['users'] = $this->tablemodel->getUserData();
		$output['page'] = 'table';
		$this->load->view('userData', $output);
	}

}
