<?php
class Ruang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_laporan');
    }

    function tambah()
    {
        $data = array(
            'title' => "Tambah Data Ruang Sium"
        );
        $this->template->load('template', 'backend/ruang/v_tambah_ruang', $data);
    }

    function lihat()
    {
        $data = array(
            'title' => "Lihat Data Laporan Ruang Sium"
        );
        $data['ruang'] = $this->db->query("SELECT * FROM ruang")->result_array();
        $this->template->load('template', 'backend/ruang/v_lihat_ruang', $data);
    }

    function tambah_data()
    {
        $data = array(
            'nama_rs' => $this->input->post('nama_rs')
        );
        $this->db->insert('ruang', $data);
        redirect('ruang/lihat');
    }

    function hapus($id)
    {
        $where = array(
            'id_rs' => $id
        );

        $this->M_laporan->delete_data($where, 'ruang');

        redirect(base_url() . 'ruang/lihat');
    }
}
