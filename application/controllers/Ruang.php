<?php
class Ruang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
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
        $this->template->load('template', 'backend/ruang/v_lihat_ruang', $data);
    }
}
