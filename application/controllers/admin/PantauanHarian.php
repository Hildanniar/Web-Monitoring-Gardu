<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PantauanHarian extends CI_Controller
{
	// membuat class construct
	public function __construct()
	{
		// untuk menjalankan program pertama kali dieksekusi
		parent::__construct();
		// load model dan library
		$this->load->model('Gardu_model');
		$this->load->model('PantauanHarian_model');
		$this->load->library('form_validation');
		$this->load->model("user_model");
	}

	// mengambil data model dan di render
	public function index()
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["PantauanHarian"] = $this->PantauanHarian_model->getAll();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/pantauanharian/list", $data);
	}

	public function relasi()
	{
		$data["Gardu"] = $this->Gardu_model->getAll();
		$this->load->view("admin/pantauanharian/new_form", $data);
	}

	// Digunakan untuk memanggil form
	public function input()
	{
		// untuk meload tampilan newform pada bagian view
		$this->load->view('admin/pantauanharian/new_form');
	}

	// menambahkan data
	public function add()
	{
		$nama_gardu = $this->input->post('nama_gardu');
		$suhu = $this->input->post('suhu');
		$arus = $this->input->post('arus');
		$cosphi = $this->input->post('cosphi');
		$tgl_pantauan = $this->input->post('tgl_pantauan');
		$tegangan = $this->input->post('tegangan');
		$status = $this->input->post('Menunggu persetujuan');
		$lokasi_pantauan = $this->input->post('lokasi_pantauan');
		//'kondisi' => $this->input->post('kondisi'),
		$data['gambar'] = '';
		$gambar = $_FILES['gambar']['name'];
		$config['upload_path'] = './assets/kk/';
		$config['allowed_types'] = 'jpg|jpeg|png';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			echo "Gambar gagal diupload";
		} else {
			$gambar = $this->upload->data('file_name');
			$data = array(
				'nama_gardu' => $nama_gardu,
				'suhu' => $suhu,
				'arus' => $arus,
				'cosphi' => $cosphi,
				'tgl_pantauan' => $tgl_pantauan,
				'tegangan' => $tegangan,
				'gambar' => $gambar,
				'lokasi_pantauan' => $lokasi_pantauan,
			);
		}

		$this->db->insert('tb_pantauanharian', $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/PantauanHarian/index'));
	}


	// untuk fungsi edit dengan nilai defaultnya null
	public function edit($id = NULL)
	{
		$this->form_validation->set_rules('nama_gardu', 'Nama_Gardu', 'required');
		$this->form_validation->set_rules('suhu', 'Suhu', 'required');
		$this->form_validation->set_rules('lokasi_pantauan', 'Lokasi_Pantauan', 'required');

		$data['PantauanHarian']  = $this->pantauanharian_model->getById($id);

		if ($this->form_validation->run()) {
			$this->pantauanharian_model->update();
		}
		$this->load->view("admin/pantauanharian/edit_form", $data);
		$this->session->set_flashdata('success', 'Berhasil diupdate');
	}

	// untuk fungsi delete dengan nilai defaultnya null
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->pantauanharian_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			redirect(site_url('admin/PantauanHarian'));
		}
	}
}
