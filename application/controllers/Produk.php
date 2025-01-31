<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Produk');
		$this->load->model('M_Kategori');
		$this->load->model('M_Status');
	}

	public function index()
	{
		$data['produk'] = $this->M_Produk->getAll();
		$this->load->view('produk', $data);
	}

	public function tambah()
	{
		$data['kategori'] = $this->M_Kategori->getAll();
		$data['status'] = $this->M_Status->getAll();

		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric');
		$this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('status_produk', 'Status Produk', 'required');

		$this->form_validation->set_message('required', '{field} tidak boleh kosong. Mohon untuk diisi.');
		$this->form_validation->set_message('numeric', '{field} harus berupa angka.');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		if ($this->form_validation->run() == false) {
			$this->load->view('produk-tambah', $data);
		} else {
			$this->proses_tambah_produk();
		}
	}

	public function proses_tambah_produk()
	{
		$data = [
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga_produk'),
			'kategori_id' => $this->input->post('kategori_produk'),
			'status_id' => $this->input->post('status_produk'),
		];

		$this->M_Produk->insertProduct($data);
		$this->session->set_flashdata('pesan', 'Data produk berhasil di tambahkan');
		redirect(base_url());
	}

	public function ubah($id)
	{
		$data['produk'] = $this->M_Produk->getProductById($id);
		$data['kategori'] = $this->M_Kategori->getAll();
		$data['status'] = $this->M_Status->getAll();

		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric');
		$this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('status_produk', 'Status Produk', 'required');

		$this->form_validation->set_message('required', '{field} tidak boleh kosong. Mohon untuk diisi.');
		$this->form_validation->set_message('numeric', '{field} harus berupa angka.');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		if ($this->form_validation->run() == false) {
			$this->load->view('produk-ubah', $data);
		} else {
			$this->proses_ubah_produk();
		}
	}

	public function proses_ubah_produk()
	{
		$id = $this->input->post('id_produk');
		$data = [
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga_produk'),
			'kategori_id' => $this->input->post('kategori_produk'),
			'status_id' => $this->input->post('status_produk'),
		];

		$this->M_Produk->updateProduct($data, $id);
		$this->session->set_flashdata('pesan', 'Data produk berhasil di perbarui');
		redirect(base_url());
	}

	public function hapus($id)
	{
		$this->M_Produk->delete($id);
		$this->session->set_flashdata('pesan', 'Data produk berhasil dihapus');
		redirect(base_url());
	}
}
