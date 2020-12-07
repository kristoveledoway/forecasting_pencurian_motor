<?php
class Piket extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url());
        }
        $this->load->model('M_laporan');
    }

    function tambah()
    {
        $data = array(
            'title' => "Tambah Data Piket Sat Reskrim"
        );
        $this->template->load('template', 'backend/piket/v_tambah_piket', $data);
    }

    function lihat()
    {
        $data = array(
            'title' => "Lihat Data Laporan Piket Sat Reskrim"
        );
        $data['piket'] = $this->db->query("SELECT * FROM piket")->result_array();
        $this->template->load('template', 'backend/piket/v_lihat_piket', $data);
    }

    function tambah_data()
    {
        $data = array(
            'nama_piket' => $this->input->post('nama_piket'),
            'waktu_piket' => $this->input->post('waktu_piket')
        );
        $this->db->insert('piket', $data);
        redirect('piket/lihat');
    }

    function hapus($id)
    {
        $where = array(
            'id_piket' => $id
        );

        $this->M_laporan->delete_data($where, 'piket');

        redirect(base_url() . 'piket/lihat');
    }
}
