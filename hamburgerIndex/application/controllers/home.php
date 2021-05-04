<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form','url'));
	}


	public function index() {

		$output = [];
		$output['hamburgerCards'] = $this->cards->hamburgers();
		$this->load->view('hamburger', $output);

	}

	public function burgerCard($id) {

		$output = [];
		$output['burger'] = $this->cards->getBurgerData($id);
		$this->load->view('burgercards', $output);

	}

	public function upload() {

		$this->load->view('upload');

		if(NULL != $this->input->post('nev')){
	
			$output = [];
			$output['nev'] = $this->input->post('nev');
			$output['hozzavalo1'] = $this->input->post('hozzavalo1');
			$output['hozzavalo2'] = $this->input->post('hozzavalo2');
			$output['hozzavalo3'] = $this->input->post('hozzavalo3');
			$output['hozzavalo4'] = $this->input->post('hozzavalo4');
			$output['hozzavalo5'] = $this->input->post('hozzavalo5');
			$output['hozzavalo6'] = $this->input->post('hozzavalo6');
			$output['hozzavalo7'] = $this->input->post('hozzavalo7');
			$output['rovid_leiras'] = $this->input->post('rovid_leiras');
			$output['elkeszites'] = $this->input->post('elkeszites');
			$output['kategoria'] = $this->input->post('kategoria');

			$this->cards->sendRecipeData($output);
		
	

			$config['allowed_types'] = 'jpeg|jpg|gif|png';
			$config['max_size'] = '100000';
			$config['max_width'] = '2000';
			$config['upload_path'] = './assets/img';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('kepfeltoltes'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

						$image = $data['upload_data']['file_name'];

						$result = $this->cards->uploadImg($image);
                }
		}
	}


}
?>