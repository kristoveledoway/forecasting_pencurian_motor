<?php
class Piket extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
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
        $this->template->load('template', 'backend/piket/v_lihat_piket', $data);
    }
}
