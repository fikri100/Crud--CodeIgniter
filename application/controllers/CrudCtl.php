<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudCtl extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('CrudModel');
        $data['customer_list'] = $this->CrudModel->getDataCustomer();
		$this->load->view('index', $data);
	}

	public function createForm()
	{
		$this->load->library('form_validation');
		$this->load->model('CrudModel');
		$this->form_validation->set_rules('kode', 'kode');
		$this->form_validation->set_rules('nama', 'nama');
		$this->form_validation->set_rules('alamat', 'alamat');
		$this->form_validation->set_rules('kota', 'kota');
		$this->form_validation->set_rules('telp', 'telp');
		$this->form_validation->set_rules('jenis', 'jenis');
		$this->form_validation->set_rules('plafon', 'plafon');
		$this->CrudModel->tambah();
		redirect('CrudCtl');
	}

	public function updateForm($kode)
	{
		$this->load->library('form_validation');
		$this->load->model('CrudModel');
		$this->form_validation->set_rules('kode', 'kode');
		$this->form_validation->set_rules('nama', 'nama');
		$this->form_validation->set_rules('alamat', 'alamat');
		$this->form_validation->set_rules('kota', 'kota');
		$this->form_validation->set_rules('telp', 'telp');
		$this->form_validation->set_rules('jenis', 'jenis');
		$this->form_validation->set_rules('plafon', 'plafon');
		$this->CrudModel->update($kode);
		redirect('CrudCtl');
	}



	public function delete($kode)
    {
        $this->load->model('CrudModel');
        $this->CrudModel->hapusdataCustomer($kode);
        redirect('CrudCtl');
    }
}
