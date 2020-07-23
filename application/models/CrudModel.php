<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CrudModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getDataCustomer()
	{
		$this->db->select('*');
        $this->db->from("customer");
        return $this->db->get()->result_array();
	}


    public function tambah()
    {
        $object = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'telp' => $this->input->post('telp'),
            'jenis' => $this->input->post('jenis'),
            'plafon' => $this->input->post('plafon'),
        );
        $this->db->insert('customer', $object);
    }

    public function getDataCustomerById($kode='')
	{
		$this->db->select('*');
		$this->db->from("customer");
		if($kode!='')
		{ $this->db->where('kode',$kode); }
		return $this->db->get()->result_array();
	}

    public function update($kode)
	{
		$object = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'telp' => $this->input->post('telp'),
            'jenis' => $this->input->post('jenis'),
            'plafon' => $this->input->post('plafon'),
        );
        
        $this->db->where('kode', $kode);
        $this->db->update('customer', $object);
	}

    public function hapusDataCustomer($kode)
	{
		$this->db->where('kode',$kode);
		if($this->db->delete("customer")){
			return "Berhasil";
		}
	}
}

/* End of file .php */
