<?php
class Laporan_polisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function tambah()
    {
        $data = array(
            'title' => "Tambah Data Laporan Polisi"
        );
        $this->template->load('template', 'backend/laporan/v_tambah_laporan', $data);
    }

    function lihat()
    {
        $data = array(
            'title' => "Lihat Data Laporan Polisi"
        );
        $this->template->load('template', 'backend/laporan/v_lihat_laporan', $data);
    }
}
