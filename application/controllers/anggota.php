<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
    }

    // 🔹 TAMPIL DATA
    public function index()
    {
        $data['anggota'] = $this->Anggota_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    // 🔹 FORM TAMBAH
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    // 🔹 SIMPAN DATA
    public function simpan()
    {
        $data = [
            'nomor_anggota'   => $this->input->post('nomor_anggota'),
            'nama'            => $this->input->post('nama'),
            'alamat'          => $this->input->post('alamat'),
            'telepon'         => $this->input->post('telepon'),
            'email'           => $this->input->post('email'),
            'tanggal_daftar'  => $this->input->post('tanggal_daftar'),
            'status'          => 'aktif'
        ];

        $this->Anggota_model->insert($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('anggota');
    }

    // 🔹 FORM EDIT
    public function edit($id)
    {
        $data['anggota'] = $this->Anggota_model->get_by_id($id);

        if (!$data['anggota']) {
            show_404(); // kalau data tidak ditemukan
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    // 🔹 UPDATE DATA
    public function update($id)
    {
        $data = [
            'nomor_anggota'   => $this->input->post('nomor_anggota'),
            'nama'            => $this->input->post('nama'),
            'alamat'          => $this->input->post('alamat'),
            'telepon'         => $this->input->post('telepon'),
            'email'           => $this->input->post('email'),
            'tanggal_daftar'  => $this->input->post('tanggal_daftar'),
            'status'          => $this->input->post('status')
        ];

        $this->Anggota_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect('anggota');
    }

    // 🔹 HAPUS DATA
    public function hapus($id)
    {
        $this->Anggota_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('anggota');
    }
}