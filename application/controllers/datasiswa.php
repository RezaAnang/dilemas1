<?php
defined('BASEPATH') or exit('no direct script access allowed');
class datasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('view-header', $data);
        $this->load->view('view-form-data-siswa');
        $this->load->view('view-footer', $data);
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmplahir' => $this->input->post('tmplahir'),
            'alamat' => $this->input->post('alamat'),
            'jnskel' => $this->input->post('jnskel'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-siswa', $data);
    }
}
